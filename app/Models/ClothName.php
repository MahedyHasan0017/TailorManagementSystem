<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClothName extends Model
{
    use HasFactory;

    protected $fillable = [
        'upper_part_dress_name',
        'quantity_of_upper_part_dress',
        'total_upper_part_dress',
        'lower_part_dress_name',
        'quantity_of_lower_part_dress',
        'total_lower_part_dress',
        'total_of_upper_and_lower_part_dress'
    ];

    public function cloth_order()
    {
        return $this->belongsTo(ClothOrder::class);
    }
}
