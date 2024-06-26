<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Iklan extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = "iklans";
    protected $fillable = ['image','company','link','type','status'];
}
