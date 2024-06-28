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
        'title',
        'description',
        'slug',
        'content',
        'kategori_id',
        'status',
        'popularity'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
