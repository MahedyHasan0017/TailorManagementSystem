<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\DressNameAndPriceRequest;
use App\Http\Requests\Settings\SettingsRequest;
use App\Models\ClothType;
use Illuminate\Http\Request;

class DressNameAndWageController extends Controller
{
    public function index()
    {
        // dd("hello") ; 

    }

    public function dress_info_settings_from_admin()
    {

        // dd('hello') ; 

        return view('superAdmin.settings.cloth_settings');
    }

    public function dress_info_submit_from_admin(DressNameAndPriceRequest $request, $id)
    {

        $data = $request->validated();

        // dd($data) ; 

        $record = ClothType::create([
            'cloth_name' => $data['dress_name'],
            'cloth_price' => $data['dress_price'],
            'dress_type' => $data['dress_type'],
            'dress_wages' => $data['dress_wages'],
            'admin_id' => $data['admin_id']
        ]);

        if ($record) {
            toastr()->success('Dress Added Successfully!');
            return redirect()->back();
        } else {
            toastr()->error('Something Went Wrong!');
            return redirect()->back();
        }
    }



    public function dress_info_list_from_admin()
    {

        $cloths = ClothType::get();
        return view('superAdmin.settings.dress_info_list', compact('cloths'));
    }
}
