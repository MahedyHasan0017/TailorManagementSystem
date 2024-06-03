<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Payment\VendorPaymentRequest;
use App\Models\SubscriptionPayment;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class VendorController extends Controller
{
    public function index()
    {
        return view('vendor.dashboard');
    }

    public function login()
    {
        $user = Auth::guard('vendor')->user();

        if ($user != null) {
            return redirect()->route('vendor_dashboard');
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
        $user = Auth::guard('vendor')->user();

        if ($user != null) {
            return redirect()->route('vendor_dashboard');
        }
        return view('vendor/auth/register');
    }
    public function register_store(RegisterRequest $request)
    {


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

    public function vendor_deactivated(){
        return view('vendor.auth.vendor_activation') ;
    }

   




    public function vendor_profile(Request $request, $id)
    {
        // dd($id);
        return view('vendor.auth.profile');
    }


    public function vendor_subscription_payment(VendorPaymentRequest $request, $mobile_number)
    {

        $data = $request->validated();
        $vendor = Vendor::where('mobile_number',$mobile_number)->first() ;
        $unique_payment_request_id =  random_int(100000, 999999);
        $payment_request = SubscriptionPayment::create([
            'vendor_id' => $vendor->id , 
            'our_mobile_number' => $data['our_number'],
            'payment_request_id' => $unique_payment_request_id,
            'number_of_tailor' => $data['tailor_number'],
            'time_span' => $data['time_span'],
            'mobile_number' => $data['mobile_number'],
            'transection_id' => $data['transection_id'],
            'total_amount' => $data['total_amount'],
            'vendor_identity' => $vendor->full_name,
            'vendor_mobile_number' => $vendor->mobile_number,
            'vendor_status' => $vendor->status
        ]);


        if($payment_request){
            toastr()->success('Your Payment Submitted Successfully! Please Wait for Our Confirmation!');
            $vendor->is_payment_requested = 1 ; 
            $vendor->save() ; 
            return redirect()->back() ; 
        }
        else{
            toastr()->error('Something Went Wrong!');
            return redirect()->back() ; 
        }

    }
}
