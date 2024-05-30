<?php

namespace App\Http\Controllers;

use App\Models\SubscriptionPayment;
use App\Models\Vendor;
use Illuminate\Http\Request;

class SubscriptionPaymentController extends Controller
{
    public function pending_payment()
    {
        $payments = SubscriptionPayment::where('is_approved',0)->get() ; 

        return view('superAdmin.payment.pending',compact('payments'));
    }

    public function approved_payment()
    {
        $payments = SubscriptionPayment::where('is_approved',1)->get() ; 
        return view('superAdmin.payment.approved',compact('payments'));
    }


    public function payment_details_for_vendor(Request $request , $transection_id){

        $transection_info = SubscriptionPayment::where('transection_id',$transection_id)->first() ; 
        return view('superAdmin.payment.payment_approve_confirm',compact('transection_info')) ; 
    }


    public function payment_request_submit(Request $request){
        

        //    dd($request->all()) ; 
        //   "payment_id" => "590613"
        //   "vendor_id" => "111"
        //   "number_of_tailor" => "3"
        //   "time_span" => "6 month"

        $payment_row = SubscriptionPayment::where('payment_request_id' , $request->payment_id)->first() ; 
        $payment_row->is_approved = 1 ; 


        $vendor = Vendor::where('mobile_number' , $payment_row->vendor_mobile_number)->first() ; 
        $vendor->tailor_adding_limit = $vendor->tailor_adding_limit + $payment_row->number_of_tailor ; 

        $time_span = substr($payment_row->time_span,0,2);
        $duration = str_replace(" ",'',$time_span) ; 

        $vendor->additional_tailor_duration = $duration ; 
        $vendor->is_payment_requested = 0 ; 
        $vdone = $vendor->save() ; 
        $pdone = $payment_row->save() ; 

        if($vdone && $pdone){
            toastr()->success('Tailor Adding Options Activated For This Vendor !');
            return redirect()->route('admin.payments.approved.view');
        }
    }

}
