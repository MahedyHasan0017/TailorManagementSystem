<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PocketForPant extends Model
{
    use HasFactory;
    protected $fillable = [
        'pant_measurement_id' ,
        'pant_pocket_name' , 
        'cloth_order_id'
    ];

    public function pant_measurement(){
        return $this->belongsTo(PantMeasurement::class) ;   
    }
}
