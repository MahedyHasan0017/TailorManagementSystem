<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cloth_orders', function (Blueprint $table) {
            $table->id();
            $table->string('shop_name');
            $table->string('vendor_name');
            $table->string('vendor_number');
            $table->string('customer_name');
            $table->string('customer_mobile');
            $table->string('customer_email')->nullable();
            $table->text('customer_address')->nullable();

            $table->string('panjabi_lomba')->nullable();
            $table->string('panjabi_body')->nullable();
            $table->string('panjabi_body_luz')->nullable();
            $table->string('panjabi_pet')->nullable();
            $table->string('panjabi_hater_lomba')->nullable();
            $table->string('panjabi_hatar_mukh')->nullable();
            $table->string('panjabi_kaff')->nullable();
            $table->string('panjabi_gola')->nullable();
            $table->string('panjabi_plate_fara')->nullable();
            $table->string('panjabi_colar_choura')->nullable();
            $table->string('panjabi_plate_choura')->nullable();
            $table->string('panjabi_gher')->nullable();
            $table->string('panjabi_hiff')->nullable();
            $table->string('panjabi_nich_hata')->nullable();
            $table->string('panjabi_madani_fara')->nullable();
            $table->string('panjabi_mot_mora')->nullable();

            $table->string('panjabi_buke_pocket_1_ti')->nullable();
            $table->string('panjabi_buke_pocket_2_ti')->nullable();
            $table->string('panjabi_1_ti_pocket_e_chain')->nullable();
            $table->string('panjabi_2_ti_pocket_e_chain')->nullable();
            $table->string('panjabi_pocket_dhaka')->nullable();
            $table->string('panjabi_pocket_dhakna')->nullable();
            $table->string('panjabi_kadhe_slodger')->nullable();
            $table->string('panjabi_haate_fita')->nullable();
            $table->string('panjabi_bon_pocket')->nullable();
            $table->string('panjabi_rannar')->nullable();
            $table->string('panjabi_bogol_pocket')->nullable();

            $table->string('panjabi_pocket_1')->nullable() ; 
            $table->string('panjabi_pocket_2')->nullable() ; 
            $table->string('panjabi_pocket_3')->nullable() ; 
            $table->string('panjabi_pocket_4')->nullable() ; 
            $table->string('panjabi_pocket_5')->nullable() ; 
            $table->string('panjabi_pocket_6')->nullable() ; 
            $table->string('panjabi_pocket_7')->nullable() ; 
            $table->string('panjabi_pocket_8')->nullable() ; 
            $table->string('panjabi_pocket_9')->nullable() ; 
            $table->string('panjabi_pocket_10')->nullable() ; 


            $table->string('panjabi_pocket_11')->nullable() ; 
            $table->string('panjabi_pocket_12')->nullable() ; 
            $table->string('panjabi_pocket_13')->nullable() ; 
            $table->string('panjabi_pocket_14')->nullable() ; 
            $table->string('panjabi_pocket_15')->nullable() ; 
            $table->string('panjabi_pocket_16')->nullable() ; 
            $table->string('panjabi_pocket_17')->nullable() ; 
            $table->string('panjabi_pocket_18')->nullable() ; 
            $table->string('panjabi_pocket_19')->nullable() ; 
            $table->string('panjabi_pocket_20')->nullable() ; 
            // $table->string('cloth') ; 


            $table->string('panjabi_colar_round')->nullable() ; 
            $table->string('panjabi_colar_sherwani')->nullable() ; 
            $table->string('panjabi_colar_single')->nullable() ; 
            $table->string('panjabi_colar_double')->nullable() ;
            $table->string('panjabi_colar_band')->nullable() ;
            $table->string('panjabi_colar_square')->nullable() ;
            $table->string('panjabi_colar_site_home')->nullable() ;

           

            $table->string('panjabi_gola_short_colar')->nullable() ;
            $table->string('panjabi_gola_kof')->nullable() ;
            $table->string('panjabi_gola_single')->nullable() ;
            $table->string('panjabi_gola_bogol')->nullable() ;
            $table->string('panjabi_gola_gol_gola')->nullable() ;


            $table->string('panjabi_pypin_colar')->nullable() ;
            $table->string('panjabi_pypin_plate')->nullable() ;
            $table->string('panjabi_pypin_hata')->nullable() ;
            $table->string('panjabi_pypin_plate_er_ekside')->nullable() ;


            $table->string('panjabi_plate_1')->nullable() ;
            $table->string('panjabi_plate_2')->nullable() ;
            $table->string('panjabi_plate_3')->nullable() ;
            $table->string('panjabi_plate_4')->nullable() ;
            $table->string('panjabi_plate_double')->nullable() ;
           


            $table->string('panjabi_kaf_1')->nullable() ;
            $table->string('panjabi_kaf_2')->nullable() ;
            $table->string('panjabi_kaf_3')->nullable() ;
            $table->string('panjabi_kaf_single_kaf')->nullable() ;
            $table->string('panjabi_kaf_double_kaf_ling')->nullable() ;


            $table->string('panjabi_pasting_single')->nullable() ;
            $table->string('panjabi_pasting_double')->nullable() ;
            $table->string('panjabi_pasting_haate_pasting')->nullable() ;
            $table->string('panjabi_pasting_botam_palte')->nullable() ;
            

            $table->string('panjabi_leis_colar')->nullable() ;
            $table->string('panjabi_leis_plate')->nullable() ;
            $table->string('panjabi_leis_hata')->nullable() ;
            $table->string('panjabi_leis_buk')->nullable() ;


            $table->string('panjabi_tira_tira')->nullable() ;
            $table->string('panjabi_tira_mora_double_chap_shelay')->nullable() ;
            $table->string('panjabi_tira_niche_round')->nullable() ;
            $table->string('panjabi_tira_vi_tira')->nullable() ;


            $table->string('panjabi_ful_shamna')->nullable() ;
            $table->string('panjabi_ful_colar')->nullable() ;
            $table->string('panjabi_ful_palte')->nullable() ;
            $table->string('panjabi_ful_kop')->nullable() ;
            $table->string('panjabi_ful_gola')->nullable() ;
            $table->string('panjabi_ful_mora')->nullable() ;
            $table->string('panjabi_ful_kandi')->nullable() ;
            $table->string('panjabi_ful_dui_pocket')->nullable() ;
            $table->string('panjabi_ful_buk_pocket')->nullable() ;
            $table->string('panjabi_ful_hateer_muhuri')->nullable() ;


            $table->string('panjabi_botam_chain_botam')->nullable() ;
            $table->string('panjabi_botam_customer_er_deya_botam')->nullable() ;
            $table->string('panjabi_botam_kath_botam')->nullable() ;
            $table->string('panjabi_botam_metal_botam_boro')->nullable() ;
            $table->string('panjabi_botam_normal_botam')->nullable() ;
            $table->string('panjabi_botam_design_botam')->nullable() ;
            $table->string('panjabi_botam_metal_botam_choto')->nullable() ;
            $table->string('panjabi_botam_snap_botam')->nullable() ;



            $table->string('pant_lomba')->nullable() ;
            $table->string('pant_payer_mukh')->nullable() ;
            $table->string('pant_body_high')->nullable() ;
            $table->string('pant_thai_luz')->nullable() ;
            $table->string('pant_komor')->nullable() ;
            $table->string('pant_belt_type')->nullable() ;
            $table->string('pant_hiff')->nullable() ;

            $table->string('pant_1_pocket_chain')->nullable() ;
            $table->string('pant_2_pocket_chain')->nullable() ;
            $table->string('pant_mobile_pocket_1_ti')->nullable() ;
            $table->string('pant_pechone_pocket_1_ti')->nullable() ;
            $table->string('pant_pechone_pocket_2_ti')->nullable() ;
            $table->string('pant_1_tiken')->nullable() ;
            $table->string('pant_2_tiken')->nullable() ;
            $table->string('pant_tiken_chara')->nullable() ;
            $table->string('pant_jeans_pant_golder_shuta')->nullable() ;
            $table->string('pant_jeans_pant_same_shuta')->nullable() ;
            $table->string('pant_shamne_chain')->nullable() ;
            $table->string('pant_mobile_pocket_2_ti')->nullable() ;
            $table->string('pant_poket_1')->nullable() ;
            $table->string('pant_poket_2')->nullable() ;
            $table->string('pant_poket_3')->nullable() ;
            $table->string('pant_poket_4')->nullable() ;
            $table->string('pant_poket_5')->nullable() ;
            $table->string('pant_poket_6')->nullable() ;
            $table->string('pant_poket_7')->nullable() ;
            $table->string('pant_poket_8')->nullable() ;
            $table->string('pant_poket_9')->nullable() ;
            $table->string('pant_poket_10')->nullable() ;
            $table->string('pant_poket_11')->nullable() ;
            $table->string('pant_poket_12')->nullable() ;
            $table->string('pant_poket_13')->nullable() ;
            $table->string('pant_poket_14')->nullable() ;
            $table->string('pant_poket_15')->nullable() ;
            $table->string('pant_poket_16')->nullable() ;
            $table->string('pant_poket_17')->nullable() ;
            
            


            $table->string('majurir_poriman')->nullable();
            $table->string('nogod_prodan')->nullable();
            $table->string('montobbo_shirt_panjabi')->nullable();
            $table->string('orderer_tarikh')->nullable();
            $table->string('delivery_tarikh')->nullable();
            $table->string('montobbo_pant_pajama')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cloth_orders');
    }
};
