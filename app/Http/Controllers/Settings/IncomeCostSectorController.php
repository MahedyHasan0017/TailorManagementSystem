<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;

class IncomeCostSectorController extends Controller
{
    public function income_cost()
    {
        return view('admin_vendor_employee.settings.income_cost');
    }
}