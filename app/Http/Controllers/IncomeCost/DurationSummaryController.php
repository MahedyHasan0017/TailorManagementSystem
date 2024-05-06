<?php

namespace App\Http\Controllers\IncomeCost;

use App\Http\Controllers\Controller;

class DurationSummaryController extends Controller
{
    public function duration_summary()
    {
        return view('admin_vendor_employee.income_cost.duration_summary');
    }
}
