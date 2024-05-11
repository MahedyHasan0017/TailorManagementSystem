<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $fillable=[
        'employee_id',
        'permission_name',
        'admin_id' , 
        'vendor_id' , 
        'created_by' 
    ];

    public function setPermissionAttribute($value)
    {
        $this->attributes['permission_name'] = json_encode($value);
    }

    public function getPermissionAttribute($value)
    {
        return $this->attributes['permission_name'] = json_decode($value);
    }


    public function employee(){
        return $this->belongsTo(Employee::class) ; 
    }

}
