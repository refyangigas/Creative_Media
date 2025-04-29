<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'slug',
        'ringkasan',
        'konten',
        'gambar',
        'tanggal',
        'penulis',
        'status'
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($artikel) {
            $artikel->slug = $artikel->slug ?? Str::slug($artikel->judul);
            $artikel->tanggal = $artikel->tanggal ?? now();
        });

        static::updating(function ($artikel) {
            $artikel->slug = $artikel->slug ?? Str::slug($artikel->judul);
        });
    }
}
