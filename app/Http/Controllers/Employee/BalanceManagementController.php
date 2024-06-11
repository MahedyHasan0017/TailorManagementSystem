<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\ClothOrder;
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
        $cloth_orders = ClothOrder::where('assigned_employee_mobile_number', $employee_number)->where('status', 'running')->orderBy('created_at', 'desc')
            ->get();

        return view('employee.balance_management.employee_recieved_balance_list', compact('cloth_orders'));
    }


    public function employee_pending_order_recieved_store(Request $request)
    {
        dd($request->all());

        // ClothOrder::where('')

    }
}
