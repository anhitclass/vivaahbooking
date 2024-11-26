<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;
    protected $table='agents';
    protected $fillable=[
        'name',
        'email',
        'phone_number',
        'address',
        'bank_account_no',
        'bank_ifsc_code',
        'image',
        'aadhar_card',
        'pan_card',
        'cancel_cheque',
        'passbook',
        'qualification'
    ];
}
