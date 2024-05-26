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
       

        $persmissions = Permission::where('employee_id',$id)->get() ; 

        $employee = Employee::where('id',$id)->first() ; 

        return view('superAdmin.permissions.employee.employee_single',compact(['id','persmissions','employee']));
    }

    public function employee_submit_permissions(Request $request)
    {

        $admin_id = null ; 
        $vendor_id = null ; 

        if(Auth::guard('admin')->user() != null){
            $admin_id = Auth::guard('admin')->user();
        }


        if(Auth::guard('vendor')->user() != null){
            $vendor_id = Auth::guard('vendor')->user()->id ; 
        }


        if($admin_id == null && $vendor_id == null ){
            dd('not valid ') ; 
        }
        else{

            $input = $request->all() ; 
            $input['permission_name'] = $request->input('permission_name') ; 
            $employee_id = $input['employee_id'] ; 
           
            $prevRecords = Permission::where('employee_id',$employee_id)->delete() ; 
            $len = count($input['permission_name']);
            for($i = 0 ; $i < $len ; $i++ ){
                $inp = [
                    "created_by" => "admin",
                    "admin_id" => $admin_id,
                    "vendor_id" => $vendor_id,
                    "employee_id" => $input['employee_id'] , 
                    "permission_name" => $input['permission_name'][$i] 
                ];
                Permission::updateOrCreate($inp) ;  
            }
    
            
            toastr()->success('Role Assigned Sucessfully!');
            return redirect()->route('permission.employee.list.view');
        }





    }


    public function vendor_employee_list(Request $request , $mobile){


        $employees = Employee::where('vendor_mobile',$mobile)->get() ; 


        $total = count($employees) ; 

        if($total > 5){
            return view('vendor.terms_and_conditions.terms_and_conditions');
        }





        return view('vendor.permissions.employee.employee_list',compact('employees')) ; 
    }



    public function vendor_employee_single(Request $request,$id){
        $persmissions = Permission::where('employee_id',$id)->get() ; 

        $employee = Employee::where('id',$id)->first() ; 

        return view('vendor.permissions.employee.employee_single',compact(['id','persmissions','employee']));
    }

    public function vendor_employee_submit_permissions(Request $request)
    {

        $admin_id = null ; 
        $vendor_id = null ; 

        if(Auth::guard('admin')->user() != null){
            $admin_id = Auth::guard('admin')->user();
        }


        if(Auth::guard('vendor')->user() != null){
            $vendor_id = Auth::guard('vendor')->user()->id ; 
        }


        if($admin_id == null && $vendor_id == null ){
            dd('not valid ') ; 
        }
        else{

            $input = $request->all() ; 
            $input['permission_name'] = $request->input('permission_name') ; 
            $employee_id = $input['employee_id'] ; 
           
            $prevRecords = Permission::where('employee_id',$employee_id)->delete() ; 
            $len = count($input['permission_name']);
            for($i = 0 ; $i < $len ; $i++ ){
                $inp = [
                    "created_by" => "admin",
                    "admin_id" => $admin_id,
                    "vendor_id" => $vendor_id,
                    "employee_id" => $input['employee_id'] , 
                    "permission_name" => $input['permission_name'][$i] 
                ];
                Permission::updateOrCreate($inp) ;  
            }
    
            
            toastr()->success('Role Assigned Sucessfully!');
            return redirect()->route('vendor.permission.employee.list.view',['mobile' => Auth::guard('vendor')->user()->mobile_number]);
        }

    }

}
