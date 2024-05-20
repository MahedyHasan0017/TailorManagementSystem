<?php

namespace App\Http\Controllers\ClothOrder;

use App\Http\Controllers\Controller;
use App\Models\BotamForPanjabi;
use App\Models\ClothName;
use App\Models\ClothOrder;
use App\Models\ClothOrderDelivaryInfo;
use App\Models\ClothType;
use App\Models\ColarForPanjabi;
use App\Models\FullForPanjabi;
use App\Models\GolaForPanjabi;
use App\Models\KaffForPanjabi;
use App\Models\LeiseForPanjabi;
use App\Models\PanjabiMeasurement;
use App\Models\PantMeasurement;
use App\Models\PastingForPanjabi;
use App\Models\PlateForPanjabi;
use App\Models\PocketForPanjabi;
use App\Models\PocketForPant;
use App\Models\PypinForPanjabi;
use App\Models\TiraForPanjabi;
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


        $num_of_cloth = $request->input('number_of_cloth',[]);
        $num_of_cloth = array_filter($num_of_cloth, fn($value) => !is_null($value) && $value !== '') ; 
        $num_of_cloth = array_values($num_of_cloth) ;
        $num_of_cloth = $num_of_cloth[0] ; 


        // dd($request->all()) ; 

        $cloth_order->save() ; 

        if($cloth_order){

            $cloth_name = ClothName::create([
                'cloth_name' => $data['cloth_full_name'],
                'cloth_order_id' => $cloth_order->id ,
                'number_of_cloth' => $num_of_cloth,
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


                $golas = $request->input('gola',[]) ; 

                for($i = 0 ; $i < count($golas) ; $i++){
                    $golas_for_panjabi = GolaForPanjabi::create([
                        'panjabi_measurement_id' => $panjabi_measurement->id ,
                        'gola_name' => $golas[$i] ,
                        'cloth_order_id' => $cloth_order->id,
                    ]);
                    $golas_for_panjabi->save() ; 
                }


                $pypins = $request->input('pypin',[]) ; 

                for($i = 0 ; $i < count($pypins) ; $i++){
                    $pypins_for_panjabi = PypinForPanjabi::create([
                        'panjabi_measurement_id' => $panjabi_measurement->id ,
                        'pypin_name' => $pypins[$i] ,
                        'cloth_order_id' => $cloth_order->id,
                    ]);
                    $pypins_for_panjabi->save() ; 
                }
                

                $plates = $request->input('plate',[]) ; 

                for($i = 0 ; $i < count($plates) ; $i++){
                    $plate_for_panjabi = PlateForPanjabi::create([
                        'panjabi_measurement_id' => $panjabi_measurement->id ,
                        'plate_name' => $plates[$i] ,
                        'cloth_order_id' => $cloth_order->id,
                    ]);
                    $plate_for_panjabi->save() ; 
                }

                $kaffs = $request->input('kaff',[]) ; 

                for($i = 0 ; $i < count($kaffs) ; $i++){
                    $kaffs_for_panjabi = KaffForPanjabi::create([
                        'panjabi_measurement_id' => $panjabi_measurement->id ,
                        'kaff_name' => $kaffs[$i] ,
                        'cloth_order_id' => $cloth_order->id,
                    ]);
                    $kaffs_for_panjabi->save() ; 
                }


                $pastings = $request->input('pasting',[]) ; 

                for($i = 0 ; $i < count($pastings) ; $i++){
                    $pastings_for_panjabi = PastingForPanjabi::create([
                        'panjabi_measurement_id' => $panjabi_measurement->id ,
                        'pasting_name' => $pastings[$i] ,
                        'cloth_order_id' => $cloth_order->id,
                    ]);
                    $pastings_for_panjabi->save() ; 
                }




                $laises = $request->input('laise',[]) ;


                for($i = 0 ; $i < count($laises) ; $i++){
                    $laises_for_panjabi = LeiseForPanjabi::create([
                        'panjabi_measurement_id' => $panjabi_measurement->id ,
                        'leise_name' => $laises[$i] ,
                        'cloth_order_id' => $cloth_order->id,
                    ]);
                    $laises_for_panjabi->save() ; 
                }

                $tiras = $request->input('tira',[]) ; 

                for($i = 0 ; $i < count($tiras) ; $i++){
                    $tiras_for_panjabi = TiraForPanjabi::create([
                        'panjabi_measurement_id' => $panjabi_measurement->id ,
                        'tira_name' => $tiras[$i] ,
                        'cloth_order_id' => $cloth_order->id,
                    ]);
                    $tiras_for_panjabi->save() ; 
                }

                $fulls = $request->input('full',[]) ; 


                for($i = 0 ; $i < count($fulls) ; $i++){
                    $fulls_for_panjabi = FullForPanjabi::create([
                        'panjabi_measurement_id' => $panjabi_measurement->id ,
                        'full_name' => $fulls[$i] ,
                        'cloth_order_id' => $cloth_order->id,
                    ]);
                    $fulls_for_panjabi->save() ; 
                }

                $botams = $request->input('botam',[]) ; 

                for($i = 0 ; $i < count($botams) ; $i++){
                    $botams_for_panjabi = BotamForPanjabi::create([
                        'panjabi_measurement_id' => $panjabi_measurement->id ,
                        'botam_name' => $botams[$i] ,
                        'cloth_order_id' => $cloth_order->id,
                    ]);
                    $botams_for_panjabi->save() ; 
                }

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



            if($pant_measurement){

                $pockets = $request->input('pant_pocket',[]) ; 

                for($i = 0 ; $i < count($pockets) ; $i++){
                    $pockets_for_pant = PocketForPant::create([
                        'pant_measurement_id' => $pant_measurement->id,
                        'pant_pocket_name' => $pockets[$i],
                        'cloth_order_id' => $cloth_order->id,
                    ]);
                    $pockets_for_pant->save() ; 
                }

            }

    

        }


        return redirect()->route('admin.order.accepting.list');
    }


    public function order_details_view(Request $request , $id){

        $order_detail = ClothOrder::where('id',$id)->first() ; 

        return view('admin_vendor_employee.cloth_order.cloth_order_details',compact('order_detail')) ; 
    }


    public function order_accepted_list()
    {

        $cloth_orders = ClothOrder::all(); 

        return view('admin_vendor_employee.cloth_order.order_list',compact('cloth_orders'));
    }
}
