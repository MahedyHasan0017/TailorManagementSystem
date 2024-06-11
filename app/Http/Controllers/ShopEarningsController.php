<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopEarningsController extends Controller
{
    public function vendor_payment_completed(Request $request)
    {
        dd($request->all());
    }
}
