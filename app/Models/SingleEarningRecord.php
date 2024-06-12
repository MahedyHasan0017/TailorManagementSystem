<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SingleEarningRecord extends Model
{
    use HasFactory;

    public $timestamp = true;

    protected $fillable = [
        'cloth_upper_name',
        'cloth_lower_name',
        'total_cloth_price',
        'total_bill',
        'tailor_wage',
        'tailor_name',
        'tailor_mobile_number',
        'deposite_amount',
        'rest_amount',
        'orderer_tarikh',
        'delivery_tarikh',
    ];
}
