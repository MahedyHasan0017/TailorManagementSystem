<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function login()
    {
        return view('employee/auth/login');
    }
    public function login_store(Request $request)
    {
        // dd($request->all());
        $data = $request->all();
        $check['email'] = $data['email'];
        $check['password'] = $data['password'];

        if (Auth::guard('employee')->attempt($check)) {

            toastr()->success('Employee Login Successfully !');
            return redirect()->route('employee_dashboard');
        } else {
            toastr()->error('Invalid Credentials !');
            return redirect()->back();
        }

    }

    public function employee_logout()
    {

        Auth::guard('employee')->logout();
        toastr()->info('Employee Logged Out Successfully !');
        return redirect()->route('auth.employee.login.view');
    }

    public function register()
    {
        return view('employee/auth/register');
    }
    public function register_store(Request $request)
    {

        $is_user_exists = Employee::where('email', $request->email)->first();

        if ($is_user_exists) {
            toastr()->error('User already exists!');
            return redirect()->back();
        } else {

            $user = Employee::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            if ($user) {
                toastr()->success('User Registered Successfully! Please Login!');
                return redirect()->route('auth.employee.login.view');
            } else {
                toastr()->error('Something Went Wrong!');
                return redirect()->back();
            }
        }
    }
    public function recovery_password()
    {

    }
    public function recovery_password_store(Request $request)
    {

    }
}