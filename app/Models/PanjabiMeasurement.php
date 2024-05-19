<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PanjabiMeasurement extends Model
{
    use HasFactory;

    protected $fillable = [
        'cloth_order_id',
        'panjabi_lomba',
        'panjabi_body',
        'panjabi_body_luz',
        'panjabi_pet',
        'panjabi_put',
        'panjabi_hater_lomba',
        'panjabi_hatar_mukh',
        'panjabi_kaff',
        'panjabi_gola',
        'panjabi_plate_fara',
        'panjabi_colar_choura',
        'panjabi_plate_choura',
        'panjabi_gher',
        'panjabi_hiff',
        'panjabi_nich_hata',
        'panjabi_madani_fara',
        'panjabi_mot_mora',
        'panjabi_hatte_pasting'
    ];

    public function cloth_order(){
        return $this->belongsTo(ClothOrder::class) ; 
    }

    public function pocket(){
        return $this->hasMany(PocketForPanjabi::class) ;  
    }

    public function colar(){
        return $this->hasMany(ColarForPanjabi::class) ;  
    }

}
