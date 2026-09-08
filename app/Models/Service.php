<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    // Menentukan kolom mana saja yang boleh diisi secara masal (Mass Assignment)
    // Ini penting untuk keamanan agar user tidak bisa mengubah data yang tidak diizinkan.
    protected $fillable = [
        'name',
        'slug',
        'short_description',
        'description',
        'icon',
        'starting_price',
        'status',
    ];

    // Secara otomatis mengubah tipe data (casting) saat diambil dari database
    protected $casts = [
        'status' => 'boolean',
    ];
}
