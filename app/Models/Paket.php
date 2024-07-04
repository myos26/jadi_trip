<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paket extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pakets';
    protected $fillable = [
        'thumbnail',
        'title',
        'slug',
        'deskripsi',
        'harga',
        'konten',
        'tipe',
        'kategori',
        'status'
    ];
}
