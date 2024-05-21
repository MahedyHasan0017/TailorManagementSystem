<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClothOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'cloth_name' , 
        'shop_name',
        'order_id',
        'vendor_name',
        'vendor_number',
        'customer_name',
        'customer_mobile',
        'customer_email',
        'customer_address'
    ];

    public function cloth_name(){
        return $this->hasOne(ClothName::class) ; 
    }

    public function panjabi_measurement(){
        return $this->hasOne(PanjabiMeasurement::class) ; 
    }

    public function pant_measurement(){
        return $this->hasOne(PantMeasurement::class) ; 
    }

    public function cloth_order_delivary(){
        return $this->hasOne(ClothOrderDelivaryInfo::class) ; 
    }

}
