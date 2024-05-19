<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PantMeasurement extends Model
{
    use HasFactory;

    protected $fillable = [
        'cloth_order_id',
        'pant_lomba',
        'pant_payer_mukh',
        'pant_body_high',
        'pant_thai_luz',
        'pant_komor',
        'pant_belt_type',
        'pant_hiff'
    ];

    public function cloth_order(){
        return $this->belongsTo(ClothOrder::class) ; 
    }
}
