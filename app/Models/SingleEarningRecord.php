<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SingleEarningRecord extends Model
{
    use HasFactory;

    public $timestamp = true;

    protected $fillable = [
        'tailor_name',
        'tailor_mobile_number',
        'tailor_wage',
        'total_price_from_this_order',
        'income_from_this_order',
        'tailor_status'
    ];
}
