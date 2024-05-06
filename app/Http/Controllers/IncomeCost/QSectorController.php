<?php

namespace App\Http\Controllers\IncomeCost;

use App\Http\Controllers\Controller;

class QSectorController extends Controller
{
    public function q_duration_summary()
    {
        return view('admin_vendor_employee.income_cost.q_duration_summary');
    }
}
