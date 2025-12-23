<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use Auth, Hash;

class ProfileController extends Controller
{
    function __construct()
    {
        // $this->middleware('permission:profile-read', ['only' => ['profile']]);
        // $this->middleware('permission:profile-update', ['only' => ['edit', 'update']]);
        // $this->middleware('permission:profile-credential', ['only' => ['chpwdform']]);
    }

    public function profile()
    {
        $user = User::find(Auth::user()->id);
        return view('users.profile', compact('user'));
    }

    public function getProfile()
    {
        $profile = User::find(Auth::user()->id);

        if (request()->wantsJson() || Str::startsWith(request()->path(), 'api')) {
            return response()->json([
                'success' => true,
                'data' => $profile,
            ]);
        }
    }

    public function editProfile()
    {
        $user = User::find(Auth::user()->id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'fullname' => 'required',
            'phone' => 'required',
        ]);

        $input = $request->all();

        $user = User::find($id);

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
            // $fileName = date('Ymd_His',time())."_profilepicture_".$file->getClientOriginalName();
            $fileName = date('Ymd_His', time()) . '_profilepicture.' . $file->getClientOriginalExtension();
            $destinationPath = public_path() . '/images/user/';
            $file->move($destinationPath, $fileName);
            $input['profilepicture'] = $fileName;
        } else {
            // Set Old File
            $input['profilepicture'] = $user->profilepicture;
        }

        if ($request->hasFile('pancard')) {
            // Delete Old File
            if ($user->pancard) {
                $file_path = public_path() . '/images/user/' . $user->pancard;
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
            }

            // Store New File
            $file = $request->file('pancard');
            // $fileName = date('Ymd_His',time())."_pancard_".$file->getClientOriginalName();
            $fileName = date('Ymd_His', time()) . '_pancard.' . $file->getClientOriginalExtension();
            $destinationPath = public_path() . '/images/user/';
            $file->move($destinationPath, $fileName);
            $input['pancard'] = $fileName;
        } else {
            // Set Old File
            $input['pancard'] = $user->pancard;
        }

        if ($request->hasFile('aadhar')) {
            // Delete Old File
            if ($user->aadhar) {
                $file_path = public_path() . '/images/user/' . $user->aadhar;
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
            }

            // Store New File
            $file = $request->file('aadhar');
            // $fileName = date('Ymd_His',time())."_aadhar_".$file->getClientOriginalName();
            $fileName = date('Ymd_His', time()) . '_aadhar.' . $file->getClientOriginalExtension();
            $destinationPath = public_path() . '/images/user/';
            $file->move($destinationPath, $fileName);
            $input['aadhar'] = $fileName;
        } else {
            // Set Old File
            $input['aadhar'] = $user->aadhar;
        }

        if (request()->wantsJson() || Str::startsWith(request()->path(), 'api')) {
            if ($user->update($input)) {
                return response()->json(['success' => true, 'message' => 'Profile updated successfully', 'data' => $user]);
            } else {
                return response()->json(['success' => false, 'message' => 'Profile Updation Failed']);
            }
        } else {
            if ($user->update($input)) {
                return redirect()->route('profile.view')->with('success', 'Profile updated successfully');
            } else {
                return redirect()->back()->withInput()->with('error', 'Profile Updation Failed');
            }
        }
    }

    public function chpwdform()
    {
        return view('users.changepwd');
    }

    public function chpwdsubmit(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);

        $user = Auth::user();

        if (request()->wantsJson() || Str::startsWith(request()->path(), 'api')) {
            if (!Hash::check($request->current_password, $user->password)) {
                return response()->json(['success' => false, 'message' => 'Current password does not match!']);
            }

            $user->pwd = $request->password;
            $user->password = Hash::make($request->password);

            if ($user->save()) {
                return response()->json(['success' => true, 'message' => 'Password changed successfully']);
            } else {
                return response()->json(['success' => false, 'message' => 'Failed to change the Password']);
            }
        } else {
            if (!Hash::check($request->current_password, $user->password)) {
                return back()->with('error', 'Current password does not match!');
            }

            $user->pwd = $request->password;
            $user->password = Hash::make($request->password);

            if ($user->save()) {
                $message = 'Password changed successfully. Try to login with new password !!';
                return back()->with('success', $message);
            } else {
                return redirect()->back()->withInput()->with('error', 'Failed to change the Password');
            }
        }
    }
}
