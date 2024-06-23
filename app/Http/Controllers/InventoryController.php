<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\ProductionCottonRecord;
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
        $count = 0;
        $cotton_yards = $request->cotton_yards;

        $cotton_joint = $request->cotton_joint;

        if ($cotton_joint >= 16) {
            $count = $cotton_joint - 16;
        }


        // dd($count);


        // $vendor_id = Auth::guard('vendor')->user()->vendor_id;
        // $cotton = Inventory::create([
        //     'vendor_info' => $vendor_id,
        //     'cotton_name' => $request->cotton_name,
        //     'cotton_type' => $request->cotton_type,
        //     'cotton_description' => $request->cotton_description,
        //     'cotton_price' => $request->cotton_price,
        //     'cotton_stock_management_unit' => $request->cotton_stock_management_unit,
        //     'cotton_size' => $request->cotton_size,
        //     'cotton_yards' => $request->cotton_yards,
        //     'cotton_joint' => $request->cotton_joint
        // ]);

        // if ($cotton) {
        //     $supplier = Supplier::create([
        //         'inventory_id' => $cotton->id,
        //         'supplier_company_name' => $request->supplier_company_name,
        //         'supplier_name' => $request->supplier_name,
        //         'supplier_mobile_number' => $request->supplier_mobile_number,
        //         'supplier_address' => $request->supplier_address,
        //         'cotton_yards_from_supplier' => $request->cotton_yards,
        //         'cotton_joint_from_supplier' => $request->cotton_joint
        //     ]);
        //     if ($supplier) {
        //         toastr()->success('Cotton Added In Inventory!');
        //         return redirect()->back();
        //     } else {
        //         toastr()->error('Something Went Wrong!');
        //         return redirect()->back();
        //     }
        // }
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
        $suppliers = $cotton->supplier->all();

        // $ans = usort($suppliers, function ($a, $b) {
        //     return strcmp($a->created_at, $b->created_at);
        // });

        return view('vendor.inventory.single_cotton', [
            'cotton' => $cotton,
            'suppliers' => $suppliers
        ]);
    }


    public function cotton_production_calculation_store(Request $request, $vendor_id, $cotton_id)
    {
        $cotton = Inventory::where('id', $request->production_amount_cotton_id)->first();
        $record = ProductionCottonRecord::create([
            'inventory_id' => $cotton_id,
            'cotton_yards_for_production' => $request->cotton_yards_for_production,
            'cotton_joint_for_production' => $request->cotton_joint_for_production
        ]);

        $cotton->cotton_yards = (int)$cotton->cotton_yards - (int)$request->cotton_yards_for_production;
        $cotton->cotton_joint = (int)$cotton->cotton_joint - (int)$request->cotton_joint_for_production;
        $done = $cotton->save();

        if ($done) {
            toastr()->success('Production Cotton Proceed Successfully!');
            return redirect()->back();
        } else {
            toastr()->error('Something Went Wrong!');
            return redirect()->back();
        }
    }



    public function cotton_in_production_list_from_vendor()
    {
        $production_cotton_list = ProductionCottonRecord::latest()->get();
        return view('vendor.inventory.production_cotton_list', [
            'cotton_list' => $production_cotton_list
        ]);
    }

    public function cotton_update_single_from_vendor(Request $request, $vendor_id, $cotton_id)
    {
        $cotton = Inventory::with('supplier')->findOrFail($cotton_id);
        $len = count($cotton->supplier);

        return  view('vendor.inventory.add_more_single_cotton', [
            'cotton' => $cotton,
            'n' => $len
        ]);
    }


    public function cotton_update_single_from_vendor_store(Request $request)
    {


        // dd($request->all());

        $supplier_company_name = $request->supplier_company_name;
        $supplier_name = $request->supplier_name;
        $supplier_mobile_number = $request->supplier_mobile_number;
        $supplier_address = $request->supplier_address;
        $cotton_id = $request->cotton_id;
        $cotton_description = $request->cotton_description;
        $cotton_yards = $request->cotton_yards;
        $cotton_joint = $request->cotton_joint;


        $cotton = Inventory::where('id', $cotton_id)->first();
        $n = count($cotton->supplier);


        if (!((str_replace(" ", '', $cotton->supplier[$n - 1]->supplier_name) == str_replace(" ", '', $supplier_name)) || (($cotton->supplier[$n - 1]->supplier_mobile_number) == ($supplier_mobile_number)))) {
            $supplier = Supplier::create([
                'inventory_id' => $cotton->id,
                'supplier_company_name' => $supplier_company_name,
                'supplier_name' => $supplier_name,
                'supplier_mobile_number' => $supplier_mobile_number,
                'supplier_address' => $supplier_address,
                'cotton_yards_from_supplier' => $cotton_yards,
                'cotton_joint_from_supplier' => $cotton_joint
            ]);
        } else {
            $supplier = Supplier::where('supplier_name', $supplier_name)->where('supplier_mobile_number', $supplier_mobile_number)->first();
            if ($supplier != null) {
                $supplier->cotton_yards_from_supplier = (int) $supplier->cotton_yards_from_supplier + (int) $cotton_yards;
                $supplier->cotton_joint_from_supplier = (int) $supplier->cotton_joint_from_supplier + (int) $cotton_joint;
                $supplier->save();
            } else {
                toastr()->error('To Add New Supplier Please Enter A Different Name And Different Mobile Number!');
                return redirect()->back();
            }
        }

        $cotton->supplier[$n - 1]->supplier_company = $supplier_company_name;
        $cotton->cotton_yards = (int) $cotton->cotton_yards + (int) $cotton_yards;
        $cotton->cotton_joint = (int) $cotton->cotton_joint + (int) $cotton_joint;
        $cotton->cotton_description = $cotton_description;
        $done = $cotton->save();

        if ($done) {
            toastr()->success('Cotton Added In Inventory!');
            return redirect()->back();
        } else {
            toastr()->error('Something Went Wrong!');
            return redirect()->back();
        }
    }


    public function cotton_supplier_single_info_view(Request $request, $vendor_id, $cotton_id, $supplier_id)
    {
        $supplier = Supplier::findOrFail($supplier_id);

        return view('vendor.inventory.supplier_details', [
            'supplier' => $supplier
        ]);
    }
}
