<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artikel extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'judul', 'gambar', 'tanggal', 'konten'
    ];

    protected $hidden = [

    ];
}
