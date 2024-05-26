<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\Employee;
use App\Models\Permission;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{


    public function index()
    {
        $employee_id = Auth::guard('employee')->user()->id;
        $permission_list = Permission::where('employee_id', $employee_id)->get();
        return view('employee.dashboard', compact('permission_list'));
    }

    public function login()
    {
        $user = Auth::guard('employee')->user();

        if ($user != null) {
            return redirect()->route('employee_dashboard');
        }
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

        $user = Auth::guard('employee')->user();

        if ($user != null) {
            return redirect()->route('employee_dashboard');
        }

        return view('employee/auth/register');
    }
    public function register_store(RegisterRequest $request)
    {
     

        $vendor = Vendor::where('mobile_number' , $request->vendor_number)->first() ; 


        if($vendor == null){
            toastr()->error('Something Went Wrong!');
            return redirect()->back();
        }


        // if($vendor)

        $is_user_exists = Employee::where('email', $request->email)->first();

        if ($is_user_exists) {
            toastr()->error('User already exists!');
            return redirect()->back();
        } else {


            $employee_id = random_int(100000, 999999);

            $user = Employee::create([
                'employee_id' => $employee_id,
                'full_name' => $request->full_name,
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'mobile_number' => $request->mobile_number,
                'vendor_mobile' => $request->vendor_number
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
