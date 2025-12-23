<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use DB;
use Hash;

class UserController extends Controller
{
    function __construct()
    {
        date_default_timezone_set('Asia/Kolkata');

        // $this->middleware('permission:user-create', ['only' => ['create', 'store']]);
        // $this->middleware('permission:user-read', ['only' => ['index', 'show']]);
        // $this->middleware('permission:user-update', ['only' => ['edit', 'update']]);
        // $this->middleware('permission:user-delete', ['only' => ['destroy']]);

        // $this->middleware('permission:user-trash', ['only' => ['trash']]);
        // $this->middleware('permission:user-restore', ['only' => ['restore', 'restore_all']]);
    }

    public function index(Request $request)
    {
        $data = User::with('roles')->orderBy('id', 'asc')->get();

        if (request()->wantsJson() || Str::startsWith(request()->path(), 'api')) {
            return response()->json(['success' => true, 'data' => $data]);
        } else {
            return view('users.index', compact('data'));
        }
    }

    public function getCustomUserData(Request $request)
    {
        $users = User::select('id', 'fullname', 'email', 'phone', 'profilepicture')
            ->with('roles')
            ->orderBy('id', 'desc')
            ->get();

        foreach ($users as $user) {
            $user->role = $user->roles[0]->name;
        }

        if (request()->wantsJson() || Str::startsWith(request()->path(), 'api')) {
            return response()->json(['success' => true, 'data' => $users]);
        } else {
            //
        }
    }

    public function create()
    {
        $roles = Role::where('name', '!=', 'Developer')
            ->where('guard_name', 'web')
            ->orderBy('id', 'desc')
            ->pluck('name', 'name')
            ->all();

        return view('users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'fullname' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => 'required|min:6',
            'profilepicture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        $input['pwd'] = $input['password'];  // Original Password
        $input['password'] = Hash::make($input['password']);  // Encrypted Password

        if ($request->hasFile('profilepicture')) {
            $file = $request->file('profilepicture');
            $fileName = date('Ymd_His', time()) . '_profilepicture.' . $file->getClientOriginalExtension();
            $destinationPath = public_path() . '/images/user';
            $file->move($destinationPath, $fileName);
            $input['profilepicture'] = $fileName;
        }

        if (request()->wantsJson() || Str::startsWith(request()->path(), 'api')) {
            if ($user = User::create($input)) {
                $user->assignRole($request->input('roles'));

                return response()->json(['success' => true, 'message' => 'User Created Successfully', 'data' => $user]);
            } else {
                return response()->json(['success' => false, 'message' => 'Submission Failed', 'data' => '']);
            }
        } else {
            if ($user = User::create($input)) {
                $user->assignRole($request->input('roles'));

                return redirect()->route('users.index')->with('success', 'User Created Successfully.');
            } else {
                return redirect()->back()->withInput()->with('error', 'Submission Failed');
            }
        }
    }

    public function show($id)
    {
        $user = User::find($id);

        if (request()->wantsJson() || Str::startsWith(request()->path(), 'api')) {
            return response()->json(['success' => true, 'data' => $user]);
        } else {
            return view('users.show', compact('user'));
        }
    }

    public function edit($id)
    {
        $user = User::find($id);

        // $roles = Role::where('guard_name','web')->orderBy('id')->pluck('name','name')->all();
        $roles = Role::where('name', '!=', 'Developer')
            ->where('guard_name', 'web')
            ->orderBy('id', 'desc')
            ->pluck('name', 'name')
            ->all();

        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('users.edit', compact('user', 'roles', 'userRole'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'fullname' => 'required',
            'email' => 'required|email|regex:/(.+)@(.+)\.(.+)/i|unique:users,email,' . $id,
            'phone' => 'required',
            'password' => 'min:6',
            'profilepicture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        $user = User::find($id);

        if (!empty($input['password'])) {
            $input['pwd'] = $input['password'];  // Original Password
            $input['password'] = Hash::make($input['password']);  // Encrypted Password
        } else {
            $input = Arr::except($input, array('pwd'));
            $input = Arr::except($input, array('password'));
        }

        if ($request->hasFile('profilepicture')) {
            // Delete Old File
            if ($user->profilepicture) {
                $file_path = public_path() . '/images/user/' . $user->profilepicture;
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
            }

            // Store New File
            $file = $request->file('profilepicture');
            $fileName = date('Ymd_His', time()) . '_profilepicture.' . $file->getClientOriginalExtension();
            $destinationPath = public_path() . '/images/user/';
            $file->move($destinationPath, $fileName);
            $input['profilepicture'] = $fileName;
        } else {
            // Set Old File
            $input['profilepicture'] = $user->profilepicture;
        }

        if (request()->wantsJson() || Str::startsWith(request()->path(), 'api')) {
            if ($user->update($input)) {
                $rolesExists = $request->input('roles') ?? 0;
                if ($rolesExists) {
                    // DB::table('model_has_roles')->where('model_id',$id)->delete();
                    $user->assignRole($request->input('roles'));
                }
                return response()->json(['success' => true, 'data' => $user]);
            } else {
                return response()->json(['success' => false, 'data' => 'Updation Failed']);
            }
        } else {
            if ($user->update($input)) {
                $rolesExists = $request->input('roles') ?? 0;
                if ($rolesExists) {
                    DB::table('model_has_roles')->where('model_id', $id)->delete();
                    $user->assignRole($request->input('roles'));
                }
                return redirect()->route('users.index')->with('success', 'User Updated Successfully');
            } else {
                return redirect()->back()->withInput()->with('error', 'Updation Failed !!');
            }
        }
    }

    public function changeStatus(Request $request)
    {
        $user = User::find($request->user_id);

        $user->update(['status' => $request->status]);
        return response()->json(['success' => 'Status Changed Successfully']);
    }

    public function chpwdform($id)
    {
        $user = User::find($id);
        return view('users.changeUserPassword', compact('user'));
    }

    public function chpwdsubmit(Request $request, $id)
    {
        $request->validate([
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);

        $user = User::find($id);

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('users.index')->with('success', 'Password Changed Successfully');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $userRole = $user->getRoleNames()[0];

        if ($userRole == 'SuperAdmin') {
            return redirect()->route('users.index')->with('error', 'Super Admin User cannot be Deleted.');
        }

        if (request()->wantsJson() || Str::startsWith(request()->path(), 'api')) {
            if (!checkPermission('users-delete')) {
                return response()->json(['success' => false, 'message' => 'Access Denied !!']);
            } else {
                if ($user->delete()) {
                    return response()->json(['success' => true, 'message' => 'User Deleted Successfully']);
                } else {
                    return response()->json(['success' => false, 'message' => 'User Deletion Failed !!']);
                }
            }
        } else {
            if ($user->delete()) {
                return redirect()->back()->with('success', 'User Deleted Successfully');
            } else {
                return redirect()->back()->with('error', 'Something Went Wrong, User Deletion Failed !!');
            }
        }
    }

    public function trash(Request $request)
    {
        $users = User::onlyTrashed()->get();
        return view('users.trash', compact('users'));
    }

    public function restore(Request $request, $id)
    {
        $user = User::withTrashed()->find($id);

        if (request()->wantsJson() || Str::startsWith(request()->path(), 'api')) {
            if (!checkPermission('user-restore')) {
                return response()->json(['success' => false, 'message' => 'Access Denied !!']);
            } else {
                if ($user->restore()) {
                    return response()->json(['success' => true, 'message' => 'User Restored Successfully']);
                } else {
                    return response()->json(['success' => false, 'message' => 'User Restoring Failed !!']);
                }
            }
        } else {
            if ($user->restore()) {
                return redirect()->back()->with('success', 'User Restored Successfully');
            } else {
                return redirect()->back()->with('error', 'Something Went Wrong, User Restoring Failed !!');
            }
        }
    }

    public function restore_all()
    {
        $user::onlyTrashed()->restore();
        return back()->with('success', 'All Users Restored Successfully');
    }

    // public function assignRole($id) {
    //     $user = User::whereId($id)->firstOrFail()->assignRole('Reporter');
    //     redirect('/dashboard');
    // }
}
