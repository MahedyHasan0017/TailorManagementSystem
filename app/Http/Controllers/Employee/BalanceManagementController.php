<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\ClothOrder;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BalanceManagementController extends Controller
{
    public function employee_pending_balance_list()
    {

        $employee_number = Auth::guard('employee')->user()->mobile_number;
        $cloth_orders = ClothOrder::where('assigned_employee_mobile_number', $employee_number)->where('status', 'payment_pending')->orderBy('created_at', 'desc')
            ->get();

        return view('employee.balance_management.employee_pending_balance_list', compact('cloth_orders'));
    }

    public function employee_recieved_balance_list()
    {

        $employee_number = Auth::guard('employee')->user()->mobile_number;
        $cloth_orders = ClothOrder::where('assigned_employee_mobile_number', $employee_number)->where('payment_status', 1)->where('status', 'recieved')->orderBy('created_at', 'desc')
            ->get();

        return view('employee.balance_management.employee_recieved_balance_list', compact('cloth_orders'));
    }


    public function employee_pending_order_recieved_store(Request $request)
    {
        $cloth_order = ClothOrder::where('id', $request->order_id)->first();
        $cloth_order->status = 'recieved';
        $cloth_order->payment_status = true;
        $order = $cloth_order->save();

        if ($order) {
            $employee = Employee::where('mobile_number', $cloth_order->assigned_employee_mobile_number)->first();
            $employee->employee_main_balance += (int) $cloth_order->wages_bill;
            if ($employee->save()) {
                toastr()->success('Payment Recieved!');
                return redirect()->back();
            } else {
                toastr()->error('Something Went Wrong!');
                return redirect()->back();
            }
        }
    }
}
