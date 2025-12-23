<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use DB;
use Redirect;

class ExtraController extends Controller
{
    public function registerUser(Request $request)
    {
        $this->validate($request, [
            'fullname' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => 'required|min:6',
        ]);

        $input = $request->all();

        $userExists = User::where('email', $request->email)->where('login_type', '!=', 'email')->first();

        $input['pwd'] = $input['password'];  // Original Password
        $input['password'] = Hash::make($input['password']);  // Encrypted Password
        $input['login_type'] = 'email';

        // if($request->hasFile('profilepicture')) {
        //     $file = $request->file('profilepicture');
        //     $fileName = date('Ymd_His',time())."_profilepicture.".$file->getClientOriginalExtension();
        //     $destinationPath = public_path().'/images/user';
        //     $file->move($destinationPath,$fileName);
        //     $input['profilepicture'] = $fileName;
        // }

        if (request()->wantsJson() || Str::startsWith(request()->path(), 'api')) {
            if ($userExists) {
                if ($userExists->update($input)) {
                    return response()->json(['success' => true, 'message' => 'User Registration Successful', 'data' => $user]);
                } else {
                    return response()->json(['success' => false, 'message' => 'User Updation Failed !!']);
                }
            } else {
                if ($user = User::create($input)) {
                    $user->assignRole($request->input('roles'));

                    return response()->json(['success' => true, 'message' => 'User Registration Successful', 'data' => $user]);
                } else {
                    return response()->json(['success' => false, 'message' => 'Registration Failed', 'data' => '']);
                }
            }
        } else {
            if ($userExists) {
                if ($userExists->update($input)) {
                    return redirect()->route('users.index')->with('success', 'User Registration Successful');
                } else {
                    return redirect()->back()->withInput()->with('error', 'Registration Failed');
                }
            } else {
                if ($user = User::create($input)) {
                    $user->assignRole($request->input('roles'));

                    return redirect()->route('users.index')->with('success', 'User Registration Successful');
                } else {
                    return redirect()->back()->withInput()->with('error', 'Registration Failed');
                }
            }
        }
    }

    public function checkLoginStatus()
    {
        $user = Auth::user();
        if ($user->status == 0) {
            $user->remember_token = '';
            $user->save();
            return response()->json(['status' => false]);
        }
        return response()->json(['status' => true]);
    }

    public function loginSocial(Request $request)
    {
        if (request()->wantsJson() || Str::startsWith(request()->path(), 'api')) {
            $user = User::where('email', $request->email)->first();

            if ($user) {
                if ($user->status == 1) {
                    $data['token'] = $user->createToken('VPCTOKEN')->accessToken;
                    $data['id'] = $user->id;
                    $data['fullname'] = $user->fullname;
                    $data['role'] = auth()->user()->roles[0]->name;
                    $data['login_type'] = $user->login_type;

                    if ($user->profilepicture)
                        $data['profilephoto'] = 'images/user/' . $user->profilepicture;
                    else
                        $data['profilephoto'] = 'dist/images/default-user.png';

                    // dd($data);

                    return response()->json(['success' => true, 'message' => 'Login Successful...!!!', 'data' => $data]);
                } else {
                    return response()->json(['success' => false, 'message' => 'Access Denied, Contact to Administrator']);
                }
            } else {
                $input = $request->all();

                if ($user = User::create($input)) {
                    $user = User::find($user->id);

                    $data['token'] = $user->createToken('VPCTOKEN')->accessToken;
                    $data['id'] = $user->id;
                    $data['fullname'] = $user->fullname;
                    $data['role'] = auth()->user()->roles[0]->name;
                    $data['login_type'] = $user->login_type;

                    if ($user->profilepicture)
                        $data['profilephoto'] = 'images/user/' . $user->profilepicture;
                    else
                        $data['profilephoto'] = 'dist/images/default-user.png';

                    // dd($data);

                    return response()->json(['success' => true, 'message' => 'User Registration Successful', 'data' => $data]);
                } else {
                    return response()->json(['success' => false, 'message' => 'Failed to attempt']);
                }
            }
        }
    }

    public function login(Request $request)
    {
        if (request()->wantsJson() || Str::startsWith(request()->path(), 'api')) {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                $user = Auth::user();

                if ($user->status == 1) {
                    $data['token'] = $user->createToken('VPCTOKEN')->accessToken;
                    $data['id'] = $user->id;
                    $data['fullname'] = $user->fullname;
                    $data['role'] = auth()->user()->roles[0]->name;
                    $data['login_type'] = $user->login_type;

                    if ($user->profilepicture)
                        $data['profilephoto'] = 'images/user/' . $user->profilepicture;
                    else
                        $data['profilephoto'] = 'dist/images/default-user.png';

                    // dd($data);

                    return response()->json(['success' => true, 'message' => 'Login Successful...!!!', 'data' => $data]);
                } else {
                    return response()->json(['success' => false, 'message' => 'Access Denied, Contact to Administrator']);
                }
            } else {
                return response()->json(['success' => false, 'message' => 'Unauthorized']);
            }
        } else {
            return view('auth.login');
        }
    }

    public function loginValidate(Request $request)
    {
        // $website_url = "https://www.google.com";
        $website_url = \Request::root() . '/dashboard';

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // $credentials = $request->only('email', 'password');
        // if (Auth::attempt($credentials)) {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // return redirect('dashboard')->with('success','Signed in');
            // return redirect()->intended('dashboard')->withSuccess('Signed in');
            return redirect($website_url)->withSuccess('Signed in');
        }

        return redirect('login')->withError('Unauthorized');
    }

    public function dashboard(Request $request)

    {
        
        if (Auth::check()) {
            $loginName = ucfirst(auth()->user()->fullname);
            return view('admin.dashboard');
        }
        return redirect('login')->with('warning', 'You are not allowed to access the page !!');
    }

    public function logout(Request $request)
    {
        $token = $request->user()->token();
        $token->revoke();
        $response = ['message' => 'You have been successfully logged out!'];
        return response($response, 200);
    }

    public function clearcache()
    {
        // Artisan::call('cache:clear');
        Artisan::call('optimize:clear');
        return Redirect::back()->with('success', 'Cache data is cleaned');
    }
}
