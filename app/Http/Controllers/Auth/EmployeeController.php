<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\Employee;
use App\Models\Permission;
use Carbon\Carbon;
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
        $data = $request->all();
        $check['email'] = $data['email'];
        $check['password'] = $data['password'];

        if (Auth::guard('employee')->attempt($check)) {

            $user = Auth::guard('employee')->user()->employee_id;
            $tailor = Employee::where('employee_id', $user)->first();

            if ($tailor->status == 0) {


                return view('employee.auth.deactivate_page');
            } else {
                if ($tailor->draft_at != null && $tailor->draft_at <= Carbon::now()) {
                    $tailor->status = 0;
                    $done = $tailor->save();
                    if ($done) {
                        dd('tailor deactive');
                    }
                } else {
                    toastr()->success('Employee Login Successfully !');
                    return redirect()->route('employee_dashboard');
                }
            }
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

    public function register(Request $request, $mobile)
    {
        $vendor_mobile = Auth::guard('vendor')->user()->mobile_number;

        $employees = Employee::where('vendor_mobile', $vendor_mobile)->where('designation', 'tailor')->get();
        $total = count($employees);
        return view('employee/auth/register', compact('total'));
    }
    public function register_store(RegisterRequest $request)
    {

        $vendor = Auth::guard('vendor')->user();

        if ($vendor);

        $is_user_exists = Employee::where('email', $request->email)->first();
        $mobile_number_exists = Employee::where('mobile_number', $request->mobile_number)->first();

        if ($is_user_exists || $mobile_number_exists) {
            toastr()->error('User already exists!');
            return redirect()->back();
        } else {

            $user = "";
            $employee_id = random_int(100000, 999999);

            if ($vendor->tailor_adding_limit > 5) {
                $user = Employee::create([
                    'employee_id' => $employee_id,
                    'full_name' => $request->full_name,
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'mobile_number' => $request->mobile_number,
                    'vendor_mobile' => $vendor->mobile_number,
                    'designation' => $request->designation,
                    'draft_at' => Carbon::now()->addMinutes(2),
                    'status' => 1
                ]);
            } else {
                $user = Employee::create([
                    'employee_id' => $employee_id,
                    'full_name' => $request->full_name,
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'mobile_number' => $request->mobile_number,
                    'vendor_mobile' => $vendor->mobile_number,
                    'designation' => $request->designation,
                    'status' => 1
                ]);
            }
            if ($user) {
                toastr()->success('Employee Registered Successfully!');
                return redirect()->route('vendor.permission.employee.list.view', ['mobile' => $vendor->mobile_number]);
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
