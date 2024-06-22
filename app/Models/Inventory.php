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
        'vendor_info',
        'supplier_id'
    ];


    public function supplier(){
        return $this->belongsTo(Supplier::class) ; 
    }

}
