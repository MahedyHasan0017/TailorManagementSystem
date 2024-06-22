<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventoryController extends Controller
{
    public function add_cotton_from_vendor()
    {
        return view('vendor.inventory.add_cotton');
    }

    public function add_cotton_from_vendor_store(Request $request)
    {
        // dd($request->all());


        $supplier = Supplier::create([
            'supplier_company_name' => $request->supplier_company_name,
            'supplier_name' => $request->supplier_name,
            'supplier_mobile_number' => $request->supplier_mobile_number,
            'supplier_address' => $request->supplier_address,
        ]);


        if ($supplier) {

            $vendor_id = Auth::guard('vendor')->user()->vendor_id;

            $cotton = Inventory::create([
                'vendor_info' => $vendor_id,
                'supplier_id' => $supplier->id,
                'cotton_name' => $request->cotton_name,
                'cotton_type' => $request->cotton_type,
                'cotton_description' => $request->cotton_description,
                'cotton_price' => $request->cotton_price,
                'cotton_stock_management_unit' => $request->cotton_stock_management_unit,
                'cotton_amount' => $request->cotton_amount,
            ]);


            if ($cotton) {
                toastr()->success('Cotton Added In Inventory!');
                return redirect()->back();
            } else {
                toastr()->error('Something Went Wrong!');
                return redirect()->back();
            }
        }
    }




    public function cotton_list_from_vendor()
    {

        $cotton_list = Inventory::latest()->get();

        return view('vendor.inventory.cotton_list', [
            'cotton_list' => $cotton_list
        ]);
    }


    public function cotton_single_from_vendor(Request $request, $vendor_id, $cotton_id)
    {

        $cotton = Inventory::with('supplier')->findOrFail($cotton_id);

        return view('vendor.inventory.single_cotton', [
            'cotton' => $cotton
        ]);
    }


    public function cotton_production_calculation_view(Request $request, $vendor_id, $cotton_id)
    {

        $cotton = Inventory::where('id', $request->production_amount_cotton_id)->first();
        $cotton->cotton_amount = (int)$cotton->cotton_amount - (int)$request->production_amount;
        $done = $cotton->save();

        if ($done) {
            toastr()->success('Production Cotton Proceed Successfully!');
            return redirect()->back();
        } else {
            toastr()->error('Something Went Wrong!');
            return redirect()->back();
        }

        // return view('vendor.inventory.cotton_production_view');
    }
}
