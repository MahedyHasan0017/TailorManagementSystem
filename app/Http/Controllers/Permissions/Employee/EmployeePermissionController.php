<?php

namespace App\Http\Controllers\Permissions\Employee;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Admin;
use App\Models\AdminUser;
use App\Models\Employee;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeePermissionController extends Controller
{
    public function employee_list()
    {
        $employees = Employee::all() ; 
        return view('superAdmin.permissions.employee.employee_list',compact('employees'));
    }

    public function employee_single(Request $request,$id)
    {
       

        return view('superAdmin.permissions.employee.employee_single',compact('id'));
    }

    public function employee_submit_permissions(Request $request)
    {


        $admin_id = Auth::guard('admin')->user()->id;

        $input = $request->all() ; 
        $input['permission_name'] = $request->input('permission_name') ; 
        $employee_id = $input['employee_id'] ; 
       
        $prevRecords = Permission::where('employee_id',$employee_id)->delete() ; 
        $len = count($input['permission_name']);
        for($i = 0 ; $i < $len ; $i++ ){
            $inp = [
                "created_by" => "admin",
                "admin_id" => $admin_id,
                "employee_id" => $input['employee_id'] , 
                "permission_name" => $input['permission_name'][$i] 
            ];
            Permission::updateOrCreate($inp) ;  
        }

        
        toastr()->success('Role Assigned Sucessfully!');
        return redirect()->route('permission.employee.list.view');


    }
}
