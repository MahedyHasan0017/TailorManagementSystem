<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClothOrderDelivaryInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'cloth_order_id',
        'majurir_poriman',
        'nogod_prodan',
        'montobbo_shirt_panjabi',
        'orderer_tarikh',
        'delivery_tarikh',
        'montobbo_pant_pajama'
    ];

    public function cloth_order(){
        return $this->belongsTo(ClothOrder::class) ; 
    }

}
