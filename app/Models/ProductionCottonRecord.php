<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductionCottonRecord extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $fillable = [
        'inventory_id',
        'cotton_yards_for_production',
        'cotton_joint_for_production'
    ];


    public function inventory()
    {
        return $this->belongsTo(Inventory::class);
    }
}
