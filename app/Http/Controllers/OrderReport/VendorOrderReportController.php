<?php

namespace App\Http\Controllers\OrderReport;

use App\Http\Controllers\Controller;
use App\Models\ClothOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VendorOrderReportController extends Controller
{
    public function running_order()
    {
        $mobile_number = Auth::guard('vendor')->user()->mobile_number;
        $cloth_orders =  ClothOrder::where('vendor_number', $mobile_number)->where('status', 'running')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('vendor.order_report.vendor_running_order', compact('cloth_orders'));
    }


    public function ready_order()
    {
        $mobile_number = Auth::guard('vendor')->user()->mobile_number;
        $cloth_orders =  ClothOrder::where('vendor_number', $mobile_number)->where('status', 'ready')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('vendor.order_report.vendor_ready_order', compact('cloth_orders'));
    }

    public function delivered_order()
    {
        $mobile_number = Auth::guard('vendor')->user()->mobile_number;
        $cloth_orders =  ClothOrder::where('vendor_number', $mobile_number)->where('status', 'delivered')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('vendor.order_report.vendor_delivered_order', compact('cloth_orders'));
    }
}
