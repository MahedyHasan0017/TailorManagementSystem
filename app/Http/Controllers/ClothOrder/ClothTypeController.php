<?php

namespace App\Http\Controllers\ClothOrder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClothTypeController extends Controller
{

    public function add_cloth_type(){
        return response()->json([
            'success' => true,
            'message' => 'Cloth saved successfully!',
        ]);
    }

    

    public function add_cloth_type_store(Request $request){
        // dd($request->all()) ; 
        return response()->json('ok') ; 
    }
}
