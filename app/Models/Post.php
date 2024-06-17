<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = "posts";

    protected $fillable = [
        'thumbnail',
        'judul',
        'slug',
        'content',
        'kategori_id',
        'status'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
