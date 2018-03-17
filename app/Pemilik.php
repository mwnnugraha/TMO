<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemilik extends Model
{
    //
    protected $table = "pemiliks";
    protected $fillable = ['nama','email','password'];
}
