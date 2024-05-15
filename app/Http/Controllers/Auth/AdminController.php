<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\AdminUser;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Http\Request; 

class AdminController extends Controller
{
    public function login()
    {
        $user = Auth::guard('admin')->user() ; 
     
        if($user != null){
            return redirect()->route('super_admin_dashboard') ; 
        }
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
        $user = Auth::guard('admin')->user() ; 
     
        if($user != null){
            return redirect()->route('super_admin_dashboard') ; 
        }
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

    public function manager_list(){
        return view('superAdmin/manager/manager_list') ; 
    }
    

    public function manager_activate(Request $request , $id){
        dd($id) ; 
    }



    public function vendor_register_from_admin(){
        return view('superAdmin/auth/vendor_register_from_admin') ; 
    }

    public function active_vendor_list_from_admin(){
        $vendors = Vendor::where('status',1)->get() ; 
        return view('superAdmin/auth/active_vendor_list_from_admin',compact('vendors')) ; 
    }

    public function pending_vendor_list_from_admin(){
        $vendors = Vendor::where('status',0)->get() ; 
        return view('superAdmin/auth/pending_vendor_list_from_admin',compact('vendors')) ; 
    }

    public function admin_activate_vendor(Request $request , $id){
       
        $vendor = Vendor::where('id',$id)->first() ; 
        $vendor->status = 1 ; 
        $done = $vendor->save() ; 

        if($done){
            toastr()->success('Vendor Activate Successfully !');
            return redirect()->route('auth.admin.pending.vendor.list.view') ; 
        }
        else{
            toastr()->info('Something Went Wrong');
            return redirect()->back() ; 
        }
    }

    public function admin_deactivate_vendor(Request $request , $id){
        $vendor = Vendor::where('id',$id)->first() ; 
        $vendor->status = 0 ; 
        $done = $vendor->save() ; 

        if($done){
            toastr()->success('Vendor Deactivate Successfully !');
            return redirect()->route('auth.admin.active.vendor.list.view') ; 
        }
        else{
            toastr()->info('Something Went Wrong');
            return redirect()->back() ; 
        }
    }

    public function admin_delete_vendor(Request $request , $id){
        $vendor = Vendor::where('id',$id)->first() ; 
        $done = $vendor->delete() ; 
        if($done){
            toastr()->success('Vendor Deleted!');
            return redirect()->back() ; 
        }
        else{
            toastr()->info('Something Went Wrong');
            return redirect()->back() ; 
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