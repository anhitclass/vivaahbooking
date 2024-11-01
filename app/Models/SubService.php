<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubService extends Model
{
    use HasFactory;
    protected $table='subservices';
     protected $fillable=
     [
        'name',
        'service_id',
     ];
}
