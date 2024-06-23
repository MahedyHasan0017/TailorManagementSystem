<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'supplier_company_name',
        'supplier_name',
        'supplier_mobile_number',
        'supplier_address',
        'inventory_id',
        'cotton_yards_from_supplier',
        'cotton_joint_from_supplier'
    ];

    public function inventory()
    {
        return $this->belongsTo(Inventory::class);
    }
}
