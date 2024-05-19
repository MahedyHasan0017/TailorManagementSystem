<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlateForPanjabi extends Model
{
    use HasFactory;

    protected $fillable = [
        'panjabi_measurement_id' ,
        'plate_name' , 
        'cloth_order_id'
    ];

    public function panjabi_measurement(){
        return $this->belongsTo(PanjabiMeasurement::class) ;   
    }
}
