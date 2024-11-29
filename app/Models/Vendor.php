<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Vendor extends Authenticatable
{
    use HasFactory;
    use Notifiable;
    protected $table='vendors';
    
    protected $fillable = [
        'name',
        'email',
        'password',
        'business_name',
        'business_type',
        'contact_number',
        'business_certificate',
        'address',
        'city',
        'state',
        'pincode'
    ];

    protected $hidden = [
        'password',
    ];

}
