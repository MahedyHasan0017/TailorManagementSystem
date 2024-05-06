<?php

namespace App\Http\Controllers\IncomeCost;

use App\Http\Controllers\Controller;

class AccountManagementController extends Controller
{
    public function account_management()
    {
        return view('admin_vendor_employee.income_cost.account_management');
    }
}
