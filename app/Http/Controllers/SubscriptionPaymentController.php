<?php

namespace App\Http\Controllers;

use App\Models\SubscriptionPayment;
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

        // dd($transection_id) ; 

        $transection_info = SubscriptionPayment::where('transection_id',$transection_id)->first() ; 

        return view('superAdmin.payment.payment_approve_confirm',compact('transection_info')) ; 
    }

}
