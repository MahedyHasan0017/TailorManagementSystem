<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;

class EmployeeDesignationController extends Controller
{
    public function employee_designation()
    {
        return view('admin_vendor_employee.settings.employee_designation');
    }
}
