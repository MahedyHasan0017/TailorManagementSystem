<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    public $timestamps = true;


    protected $fillable = [
        'cotton_name',
        'cotton_type',
        'cotton_description',
        'cotton_price',
        'cotton_stock_management_unit',
        'cotton_amount',
        'cotton_size',
        'vendor_info',
        // 'supplier_id',
        'cotton_yards',
        'cotton_joint'
    ];


    public function supplier()
    {
        return $this->hasMany(Supplier::class);
    }


    public function production_record()
    {
        return $this->hasMany(ProductionCottonRecord::class);
    }
}
