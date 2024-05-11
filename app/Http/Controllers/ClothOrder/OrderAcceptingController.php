<?php

namespace App\Http\Controllers\ClothOrder;

use App\Http\Controllers\Controller;

class OrderAcceptingController extends Controller
{
    public function order_accepting()
    {
        return view('admin_vendor_employee.cloth_order.order_accepting');
    }
    public function order_accepted_list()
    {
        return view('admin_vendor_employee.cloth_order.order_list');
    }
}
