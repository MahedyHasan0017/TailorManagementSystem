<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClothName extends Model
{
    use HasFactory;

    protected $fillable = [
        'cloth_name' , 
        'cloth_order_id',
        'number_of_cloth',
        'unit_of_cloth',
        'total_of_cloth'
    ];

    public function cloth_order(){
        return $this->belongsTo(ClothOrder::class) ; 
    }
}
