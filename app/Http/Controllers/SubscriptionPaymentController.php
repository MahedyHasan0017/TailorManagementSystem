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


    public function payment_details_for_vendor(Request $request , $vendor_id){

        dd($vendor_id) ; 

        return "hello" ; 
    }

}
