<?php

namespace App\Http\Controllers\EmployeeManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListEmployeeController extends Controller
{
    public function list_employee()
    {
        return view('admin_vendor_employee.employee_management.employee_list');
    }
}