<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\DressNameAndPriceRequest;
use App\Http\Requests\Settings\SettingsRequest;
use App\Models\ClothType;
use Illuminate\Http\Request;

class DressNameAndWageController extends Controller
{
    public function index(){
        // dd("hello") ; 

    }

    public function dress_info_settings_from_vendor(){
        return view('vendor.settings.cloth_settings') ; 
    }

    public function dress_info_submit_from_vendor(DressNameAndPriceRequest $request , $id){

        $data = $request->validated() ; 
        $record = ClothType::create([
            'cloth_name' => $data['dress_name'] , 
            'cloth_price' => $data['dress_price'],
            'vendor_id' => $data['vendor_id']
        ]);

        if($record){
            toastr()->success('Dress Added Successfully!');
            return redirect()->back() ; 
        }
        else{
            toastr()->error('Something Went Wrong!');
            return redirect()->back() ; 
        }

    }

}
