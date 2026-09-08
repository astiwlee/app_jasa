<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'features',
        'is_recommended',
        'status',
    ];

    // Karena features berupa JSON di database, kita cast menjadi array di PHP
    protected $casts = [
        'features' => 'array',
        'is_recommended' => 'boolean',
        'status' => 'boolean',
    ];
}
