<?php

namespace App\Http\Controllers\EmployeeManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalaryEmployeeController extends Controller
{
    
    public function salary_management_employee()
    {
        return view('admin_vendor_employee.employee_management.salary_management_employee');
    }
}