<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionPayment extends Model
{
    use HasFactory;

    public $timestamps = true ; 

    protected $fillable = [
        'our_mobile_number',
        'payment_request_id',
        'number_of_tailor',
        'time_span',
        'mobile_number',
        'transection_id',
        'total_amount',
        'is_approved',
        'vendor_mobile_number',
        'vendor_status',
        'vendor_identity'
    ];


    public function vendor(){
        return $this->belongsToMany(Vendor::class) ; 
    }



}
