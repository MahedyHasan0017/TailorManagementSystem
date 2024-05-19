<?php

namespace App\Http\Controllers\ClothOrder;

use App\Http\Controllers\Controller;
use App\Models\ClothName;
use App\Models\ClothOrder;
use App\Models\ClothOrderDelivaryInfo;
use App\Models\ClothType;
use App\Models\ColarForPanjabi;
use App\Models\PanjabiMeasurement;
use App\Models\PantMeasurement;
use App\Models\PocketForPanjabi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderAcceptingController extends Controller
{
    public function order_accepting()
    {

        // $cloth_list = ClothType::latest()->get() ; 
        $cloth_list = ClothType::get();

        return view('admin_vendor_employee.cloth_order.order_accepting', compact('cloth_list'));
    }

    public function order_accepting_store(Request $request)
    {

        $admin = Auth::guard('admin')->user();
        $data = $request->all() ; 
        // dd($data) ; 
        $cloth_order = ClothOrder::create([
            "shop_name" => "ABCD",
            "vendor_name" => $admin->name , 
            "vendor_number" => "vender-mobile-number" , 
            "customer_name" => $data['customer_name'] ,
            "customer_mobile" => $data['customer_mobile_number'],
            "customer_email" => $data['customer_email'],
            "customer_address" => $data['customer_contact_address']
        ]);

        $cloth_order->save() ; 

        if($cloth_order){

            $cloth_name = ClothName::create([
                'cloth_name' => $data['cloth_full_name'],
                'cloth_order_id' => $cloth_order->id 
            ]);

            $cloth_name->save() ; 

            $cloth_delivary = ClothOrderDelivaryInfo::create([
                'cloth_order_id' => $cloth_order->id,
                'majurir_poriman' => $data['majurir_poriman'],
                'nogod_prodan' => $data['nogod_prodan'],
                'montobbo_shirt_panjabi' => $data['montobbo_shirt_panjabi'],
                'orderer_tarikh' => $data['orderer_tarikh'],
                'delivery_tarikh' => $data['delivery_tarikh'],
                'montobbo_pant_pajama' => $data['montobbo_pant_pajama']
            ]);

            $cloth_delivary->save() ; 


            $panjabi_measurement = PanjabiMeasurement::create([
                'cloth_order_id' => $cloth_order->id,
                'panjabi_lomba' => $data['panjabi_lomba'],
                'panjabi_body' => $data['panjabi_body'],
                'panjabi_body_luz' => $data['panjabi_body_luzz'],
                'panjabi_pet' => $data['panjabi_pet'],
                'panjabi_put' => $data['panjabi_put'],
                'panjabi_hater_lomba' => $data['panjabi_hatar_lomba'],
                'panjabi_hatar_mukh' => $data['panjabi_hatar_mukh'],
                'panjabi_kaff' => $data['panjabi_kaf'],
                'panjabi_gola' => $data['panjabi_gola'],
                'panjabi_plate_fara' => $data['panjabi_plate_fara'],
                'panjabi_colar_choura' => $data['panjabi_kolar_choura'],
                'panjabi_plate_choura' => $data['panjabi_plate_choura'],
                'panjabi_gher' => $data['panjabi_gher'],
                'panjabi_hiff' => $data['panjabi_hiff'],
                'panjabi_nich_hata' => $data['panjabi_nich_hata'],
                'panjabi_madani_fara' => $data['panjabi_madani_fara'],
                'panjabi_mot_mora' => $data['panjabi_mot_mora'],
                'panjabi_hatte_pasting' => $data['panjabi_haate_pesting']
            ]);
            $panjabi_measurement->save() ; 

            if($panjabi_measurement){
            
                $pockets = $request->input('pocket',[]) ; 
                for($i = 0 ; $i < count($pockets) ; $i++){
                    $pockets_for_panjabi = PocketForPanjabi::create([
                        'panjabi_measurement_id' => $panjabi_measurement->id , 
                        'pocket_name' => $pockets[$i] , 
                        'cloth_order_id' => $cloth_order->id,
                    ]);
                    $pockets_for_panjabi->save() ; 
                }

                $colars = $request->input('colar',[]) ; 
                for($i = 0 ; $i < count($colars) ; $i++){
                    $colars_for_panjabi = ColarForPanjabi::create([
                        'panjabi_measurement_id' => $panjabi_measurement->id ,
                        'colar_name' => $colars[$i] ,
                        'cloth_order_id' => $cloth_order->id,
                    ]);
                    $colars_for_panjabi->save() ; 
                }

                // dd($colars) ; 

            }



            $pant_measurement = PantMeasurement::create([
                'cloth_order_id' => $cloth_order->id,
                'pant_lomba' => $data['pant_lomba'],
                'pant_payer_mukh' => $data['pant_payer_mukh'],
                'pant_body_high' => $data['pant_high'],
                'pant_thai_luz' => $data['pant_thai_luz'],
                'pant_komor' => $data['pant_komor'],
                'pant_belt_type' => $data['pant_belt_type'],
                'pant_hiff' => $data['pant_hiff'],
            ]);

            $pant_measurement->save() ; 






        }


        return 'data-proccessing';
    }


    public function order_details_view(){

        $order_detail = ClothOrder::where('id',15)->first() ; 

        return view('admin_vendor_employee.cloth_order.cloth_order_details',compact('order_detail')) ; 
    }


    public function order_accepted_list()
    {
        return view('admin_vendor_employee.cloth_order.order_list');
    }
}
