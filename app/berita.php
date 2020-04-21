<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    protected $fillable = [
        'judul', 'kategori', 'foto', 'isi', 'path'
    ];
}
