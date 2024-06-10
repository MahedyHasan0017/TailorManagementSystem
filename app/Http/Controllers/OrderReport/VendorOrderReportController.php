<?php

namespace App\Http\Controllers\OrderReport;

use App\Http\Controllers\Controller;
use App\Models\ClothOrder;
use App\Models\Employee;
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
        $cloth_orders =  ClothOrder::where('vendor_number', $mobile_number)
            ->where('status', 'delivered')
            ->where('payment_status', false)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('vendor.order_report.vendor_delivered_order', compact('cloth_orders'));
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

    public function vendor_pay_employee(Request $request)
    {
        // payment_status
        $data = $request->validate([
            'order_id' => 'required',
            'assigned_employee_name' => 'required',
            'assigned_employee_mobile_number' => 'required',
            'wages_of_product' => 'required'
        ]);

        $name = "Employee Name : " . $data['assigned_employee_name'] . " Has Paid Successfully";
        $employee = Employee::where('mobile_number', $data['assigned_employee_mobile_number'])->first();

        $employee->employee_main_balance += (int)$data['wages_of_product'];
        $done = $employee->save();

        if ($done) {

            $order = ClothOrder::where('id', $data['order_id'])->first();

            $order->payment_status = true;
            $completed = $order->save();

            if ($completed) {
                toastr()->success($name);
                return redirect()->back();
            } else {
                toastr()->error('Something Went Wrong!');
                return redirect()->back();
            }
        } else {
            toastr()->error('Something Went Wrong!');
            return redirect()->back();
        }

        // dd($employee->employee_main_balance);
    }
}
