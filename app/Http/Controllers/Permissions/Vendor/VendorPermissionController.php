<?php

namespace App\Http\Controllers\Permissions\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorPermissionController extends Controller
{
    public function vendor_list()
    {

        $vendors = Vendor::all() ; 

        return view('superAdmin.permissions.vendor.vendor_list',compact('vendors'));
    }
    public function vendor_single()
    {

        $vendors = Vendor::all() ; 

        

        return view('superAdmin.permissions.vendor.vendor_single',compact('vendors'));
    }

    public function vendor_submit_permissions(Request $request)
    {

        $input = $request->all() ; 

        $input['permission_name'] = $request->input('permission_name') ; 
      
        $prevRecords = Permission::where('employee_id',2)->delete() ; 
        $len = count($input['permission_name']);
        for($i = 0 ; $i < $len ; $i++ ){
            $inp = [
                "employee_id" => 2 , 
                "permission_name" => $input['permission_name'][$i] 
            ];
            Permission::updateOrCreate($inp) ;  
        }

        dd('saved or updated') ; 

        // if($done){
        //     dd('saved') ; 
        // }
        // else{
        //     dd("error") ; 
        // }



        // $vendors = Vendor::all() ; 

        // return view('superAdmin.permissions.vendor.vendor_single',compact('vendors'));
    }
}
