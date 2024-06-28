<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategoris'; // Nama tabel seharusnya dalam huruf kecil dan jamak: 'kategoris'
    protected $fillable = ['name'];

    public function posts()
    {
        return $this->hasOne(Post::class);
    }
}
