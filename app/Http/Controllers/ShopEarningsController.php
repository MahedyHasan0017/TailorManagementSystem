<?php

namespace App\Http\Controllers;

use App\Models\ClothOrder;
use App\Models\SingleEarningRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopEarningsController extends Controller
{

    public function vendor_single_payment_record()
    {

        $mobile_number = Auth::guard('vendor')->user()->mobile_number;
        $cloth_orders =  SingleEarningRecord::orderBy('created_at', 'desc')->get();

        return view('vendor.debit_credit.single_earning_record', compact('cloth_orders'));
    }

    public function vendor_payment_completed(Request $request)
    {
        dd($request->all());
    }

    public function total_earning_record(Request $request)
    {
        // dd($request->all());
        return view('vendor.debit_credit.total_earning_record');
    }
}
