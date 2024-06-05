<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClothType extends Model
{
    use HasFactory;

    public $timestamps = true; 

    protected $fillable = [
        'cloth_name' , 
        'cloth_price',
        'dress_type',
        'dress_part_type' , 
        'dress_wages',
        'vendor_id' , 
        'admin_id' 
    ];
    
}
