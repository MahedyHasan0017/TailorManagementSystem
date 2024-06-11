<?php

namespace App\Http\Controllers\ClothOrder;

use App\Http\Controllers\Controller;
use App\Models\ClothType;
use Illuminate\Http\Request;

class ClothTypeController extends Controller
{

    public function add_cloth_type()
    {
        return response()->json("hello");
    }



    public function add_cloth_type_store(Request $request)
    {
        // dd($request->all()) ; 
        $this->validate($request, [
            'cloth_name' => 'required',
        ]);
        $clothName = $request->input('cloth_name');

        $done = ClothType::create([
            "cloth_name" => $clothName,
        ]);

        if ($done) {
            return response()->json([
                "msg" => "ok"
            ]);
        } else {
            return response()->json([
                "msg" => "not ok"
            ]);
        }
    }
}
