<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\ClothOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeOrderReportController extends Controller
{

    public function running_order()
    {
        $mobile_number = Auth::guard('employee')->user()->vendor_mobile;
        $cloth_orders =  ClothOrder::where('vendor_number', $mobile_number)->where('status', 'running')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('employee.order_report.employee_running_order', compact('cloth_orders'));
    }


    public function ready_order()
    {
        $mobile_number = Auth::guard('employee')->user()->vendor_mobile;
        $cloth_orders =  ClothOrder::where('vendor_number', $mobile_number)->where('status', 'ready')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('employee.order_report.employee_ready_order', compact('cloth_orders'));
    }

    public function delivered_order()
    {
        $mobile_number = Auth::guard('employee')->user()->vendor_mobile;
        $cloth_orders =  ClothOrder::where('vendor_number', $mobile_number)
            ->where('status', 'delivered')
            ->where('payment_status', false)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('employee.order_report.employee_delivered_order', compact('cloth_orders'));
    }

    public function ready_order_store(Request $request, $id)
    {
        $order = ClothOrder::where('id', $id)->first();
        $order->status = 'delivered';
        $done = $order->save();

        if ($done) {
            toastr()->success('Product Delivered!');
            return redirect()->back();
        } else {
            toastr()->error('Something Went Wrong!');
            return redirect()->back();
        }
    }
}
