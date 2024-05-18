<?php

namespace App\Http\Controllers\ClothOrder;

use App\Http\Controllers\Controller;
use App\Models\ClothType;
use Illuminate\Http\Request;

class OrderAcceptingController extends Controller
{
    public function order_accepting()
    {

        // $cloth_list = ClothType::latest()->get() ; 
        $cloth_list = ClothType::get() ; 

        return view('admin_vendor_employee.cloth_order.order_accepting',compact('cloth_list'));
    }

    public function order_accepting_store(Request $request){


        // $pockets = $request->input('pocket') ; 

        // dd($pockets) ; 

        // $validatedData = $request->validate([
        //     'options' => 'nullable|array', // Allow an empty array if no checkboxes selected
        // ]);

        // $selectedOptions = array_filter($validatedData['options'] ?? []);


        // dd($selectedOptions) ; 

        $data = $request->all() ; 

        return view('admin_vendor_employee.cloth_order.cloth_order_confirm',compact("data"));


    }

    public function order_accepted_list()
    {
        return view('admin_vendor_employee.cloth_order.order_list');
    }

   

    

}
