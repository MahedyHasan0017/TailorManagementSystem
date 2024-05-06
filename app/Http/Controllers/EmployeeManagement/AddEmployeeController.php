<?php

namespace App\Http\Controllers\EmployeeManagement;

use App\Http\Controllers\Controller;

class AddEmployeeController extends Controller
{

    public function add_employee()
    {
        return view('admin_vendor_employee.employee_management.add_employee');
    }

}