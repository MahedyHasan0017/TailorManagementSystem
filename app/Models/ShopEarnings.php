<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopEarnings extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'total_balance',
        'total_wages_balance',
        'total_rest_balance',
        'total_revenue'
    ];
}
