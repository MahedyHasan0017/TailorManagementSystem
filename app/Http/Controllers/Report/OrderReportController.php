<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;

class OrderReportController extends Controller
{
    public function order_report()
    {
        return view('admin_vendor_employee.report.order_report');
    }
}
