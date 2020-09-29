<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelajar extends Model
{
    protected $table = 'pelajars';
    protected $fillable = ['nama', 'alamat', 'telephone'];
}
