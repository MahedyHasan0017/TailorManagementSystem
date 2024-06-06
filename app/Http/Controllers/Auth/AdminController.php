<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\AdminUser;
use App\Models\Employee;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Http\Request; 

class AdminController extends Controller
{

    public function index()
    {
        return view('superAdmin.dashboard');
    }

    public function login()
    {
        $user = Auth::guard('admin')->user();

        if ($user != null) {
            return redirect()->route('super_admin_dashboard');
        }
        // return "hello" ; 
        return view('superAdmin/auth/login');
    }
    public function login_store(LoginRequest $request)
    {
        // dd($request->all());

        $data = $request->all();
        $check['email'] = $data['email'];
        $check['password'] = $data['password'];

        if (Auth::guard('admin')->attempt($check)) {

            toastr()
                ->success('Admin Login Successfully !');
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
        $user = Auth::guard('admin')->user();

        if ($user != null) {
            return redirect()->route('super_admin_dashboard');
        }
        return view('superAdmin/auth/register');
    }
    public function register_store(RegisterRequest $request)
    {

        // dd($request->all()) ; 

        $is_user_exists = AdminUser::where('email', $request->email)->first();
        if ($is_user_exists) {
            toastr()->error('User already exists!');
            return redirect()->back();
        } else {

            $admin_id = random_int(100000, 999999);

            $user = AdminUser::create([
                'admin_id' => $admin_id,
                'full_name' =>  $request->full_name,
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'mobile_number' => $request->mobile_number
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

    public function super_admin_list()
    {
        $admins = AdminUser::where('status', 1)->get();

        $user = Auth::guard('admin')->user();

        if ($user->status == 0) {
            return redirect()->route('super_admin_dashboard');
        }

        return view('superAdmin.admin.admin_list', compact('admins'));
    }

    public function manager_list()
    {
        $managers = AdminUser::where('status', 0)->get();
        return view('superAdmin/manager/manager_list', compact('managers'));
    }


    public function update_manager_from_admin(Request $request, $id)
    {
        $admin = AdminUser::where('id', $id)->first();
        $admin->status = 0;
        $done = $admin->save();
        if ($done) {
            toastr()->success('Update Manager From Admin Successfully !');
            return redirect()->route('auth.super_admin.list.view');
        } else {
            toastr()->info('Something Went Wrong');
            return redirect()->back();
        }
    }

    public function update_super_admin_from_admin(Request $request, $id)
    {
        $admin = AdminUser::where('id', $id)->first();
        $admin->status = 1;
        $done = $admin->save();
        if ($done) {
            toastr()->success('Update Super Admin From Manager Successfully !');
            return redirect()->route('auth.manager.list.view');
        } else {
            toastr()->info('Something Went Wrong');
            return redirect()->back();
        }
    }

    public function delete_super_admin_from_admin(Request $request, $id)
    {


        $admin = AdminUser::where('id', $id)->first();
        $done = $admin->delete();
        if ($done) {
            toastr()->success('Admin Deleted!');
            return redirect()->back();
        } else {
            toastr()->info('Something Went Wrong');
            return redirect()->back();
        }
    }





    public function vendor_register_from_admin()
    {
        return view('superAdmin/auth/vendor_register_from_admin');
    }





    public function vendor_register_from_admin_store(RegisterRequest $request)
    {

        // dd($request->all()) ; 

        $is_user_exists = Vendor::where('email', $request->email)->first();

        if ($is_user_exists) {
            toastr()->error('User already exists!');
            return redirect()->back();
        } else {


            $vendor_id = random_int(100000, 999999);

            $user = Vendor::create([
                'vendor_id' => $vendor_id,
                'full_name' => $request->full_name,
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'mobile_number' => $request->mobile_number
            ]);
            if ($user) {
                toastr()->success('Vendor Registered Successfully! Please Login!');

                $admin = Auth::guard('admin')->user();


                if ($admin) {
                    return redirect()->route('auth.admin.pending.vendor.list.view');
                } else {
                    return redirect()->back();
                }
            } else {
                toastr()->error('Something Went Wrong!');
                return redirect()->back();
            }
        }
    }


    public function active_vendor_list_from_admin()
    {
        $vendors = Vendor::where('status', 1)->get();
        return view('superAdmin/auth/active_vendor_list_from_admin', compact('vendors'));
    }

    public function pending_vendor_list_from_admin()
    {
        $vendors = Vendor::where('status', 0)->get();
        return view('superAdmin/auth/pending_vendor_list_from_admin', compact('vendors'));
    }

    public function admin_activate_vendor(Request $request, $id)
    {

        $vendor = Vendor::where('id', $id)->first();
        $vendor->status = 1;
        $done = $vendor->save();

        if ($done) {
            toastr()->success('Vendor Activate Successfully !');
            return redirect()->route('auth.admin.pending.vendor.list.view');
        } else {
            toastr()->info('Something Went Wrong');
            return redirect()->back();
        }
    }

    public function admin_deactivate_vendor(Request $request, $id)
    {
        $vendor = Vendor::where('id', $id)->first();
        $vendor->status = 0;
        $done = $vendor->save();

        if ($done) {
            toastr()->success('Vendor Deactivate Successfully !');
            return redirect()->route('auth.admin.active.vendor.list.view');
        } else {
            toastr()->info('Something Went Wrong');
            return redirect()->back();
        }
    }

    public function admin_delete_vendor(Request $request, $id)
    {
        $vendor = Vendor::where('id', $id)->first();
        $done = $vendor->delete();
        if ($done) {
            toastr()->success('Vendor Deleted!');
            return redirect()->back();
        } else {
            toastr()->info('Something Went Wrong');
            return redirect()->back();
        }
    }


    public function vendor_profile(Request $request, $id)
    {
        $vendor = Vendor::where('mobile_number', $id)->first();

        $employees = Employee::where('vendor_mobile', $vendor->mobile_number)->get();
        // $emp = count($emp) ; 


        return view('superAdmin.auth.vendor_profile', compact(['vendor', 'employees']));
    }



    public function recovery_password()
    {
        return view('admin_vendor_employee/auth/recover_form');
    }
    public function recovery_password_store(Request $request)
    {
    }
}
