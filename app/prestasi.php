<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prestasi extends Model
{
    //
    protected $table = 'prestasis';
    protected $fillable = ['judul','gambar'];
}
