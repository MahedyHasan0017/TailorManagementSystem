<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\AdminUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Http\Request; 

class AdminController extends Controller
{
    public function login()
    {
        return view('superAdmin/auth/login');
    }
    public function login_store(LoginRequest $request)
    {
        // dd($request->all());

        $data = $request->all();
        $check['email'] = $data['email'];
        $check['password'] = $data['password'];

        if (Auth::guard('admin')->attempt($check)) {

            toastr()->success('Admin Login Successfully !');
            return redirect()->route('super_admin_dashboard');
        } else {
            toastr()->error('Invalid Credentials !');
            return redirect()->back();
        }

    }

    public function admin_logout()
    {
        // dd('from logged out ');
        Auth::guard('admin')->logout();
        toastr()->info('Admin Logged Out Successfully !');
        return redirect()->route('auth.admin.login.view');
    }

    public function register()
    {
        return view('superAdmin/auth/register');
    }
    public function register_store(RegisterRequest $request)
    {
        $is_user_exists = AdminUser::where('email', $request->email)->first();
        if ($is_user_exists) {
            toastr()->error('User already exists!');
            return redirect()->back();
        } else {

            $user = AdminUser::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            if ($user) {
                toastr()->success('User Registered Successfully! Please Login!');
                return redirect()->route('auth.admin.login.view');
            } else {
                toastr()->error('Something Went Wrong!');
                return redirect()->back();
            }
        }

    }
    public function recovery_password()
    {
        return view('admin_vendor_employee/auth/recover_form');
    }
    public function recovery_password_store(Request $request)
    {

    }

}