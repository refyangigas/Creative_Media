<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class LayananJasa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'slug',
        'deskripsi',
        'konten',
        'gambar',
        'icon',
        'kategori',
        'status'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($layanan) {
            $layanan->slug = $layanan->slug ?? Str::slug($layanan->nama);
        });

        static::updating(function ($layanan) {
            $layanan->slug = $layanan->slug ?? Str::slug($layanan->nama);
        });
    }
}
