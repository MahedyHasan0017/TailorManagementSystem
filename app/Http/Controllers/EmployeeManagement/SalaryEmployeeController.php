<?php

namespace App\Http\Controllers\EmployeeManagement;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SalaryEmployeeController extends Controller
{

    public function salary_management_employee()
    {
        return view('admin_vendor_employee.employee_management.salary_management_employee');
    }


    public function salary_management_employee_from_vendor()
    {
        $vendor_mobile = Auth::guard('vendor')->user()->mobile_number;
        $employees = Employee::where('vendor_mobile', $vendor_mobile)->get();
        return view('vendor.employee_management.salary_management.vendor_salary_management_employee', compact(['employees']));
    }
}
