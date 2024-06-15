<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'blogs';
    protected $fillable = ['image', 'judul', 'artikel', 'kategori_id', 'status'];

    public function Kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }
}
