<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'kategoris'; // Nama tabel seharusnya dalam huruf kecil dan jamak: 'kategoris'
    protected $fillable = ['name'];
}
