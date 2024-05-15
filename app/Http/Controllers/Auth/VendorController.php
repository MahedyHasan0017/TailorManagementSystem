<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class VendorController extends Controller
{
    public function login()
    {
        $user = Auth::guard('vendor')->user() ; 
     
        if($user != null){
            return redirect()->route('vendor_dashboard') ; 
        }
        return view('vendor/auth/login');
    }
    public function login_store(Request $request)
    {
        // dd($request->all());
        $data = $request->all();
        $check['email'] = $data['email'];
        $check['password'] = $data['password'];

        if (Auth::guard('vendor')->attempt($check)) {

            toastr()->success('Vendor Login Successfully !');
            return redirect()->route('vendor_dashboard');
        } else {
            toastr()->error('Invalid Credentials !');
            return redirect()->back();
        }

    }

    public function vendor_logout()
    {

        Auth::guard('vendor')->logout();
        toastr()->info('Vendor Logged Out Successfully !');
        return redirect()->route('auth.vendor.login.view');
    }

    public function register()
    {
        $user = Auth::guard('vendor')->user() ; 
     
        if($user != null){
            return redirect()->route('vendor_dashboard') ; 
        }
        return view('vendor/auth/register');
    }
    public function register_store(Request $request)
    {

        $is_user_exists = Vendor::where('email', $request->email)->first();

        if ($is_user_exists) {
            toastr()->error('User already exists!');
            return redirect()->back();
        } else {

            $user = Vendor::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            if ($user) {
                toastr()->success('Vendor Registered Successfully! Please Login!');

                $admin = Auth::guard('admin')->user() ; 

           
                if($admin){
                    return redirect()->route('auth.admin.pending.vendor.list.view');
                }
                else{
                    return redirect()->route('auth.vendor.login.view');
                }

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