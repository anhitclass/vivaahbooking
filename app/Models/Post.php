<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table='posts';
    protected $fillable = [
        'name',
        'service',
        'image',
        'business_type',
        'vendor_id'
    ];

    protected $casts = [
        'image' => 'array',
    ];
    
}
