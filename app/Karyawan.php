<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawans';
    protected $fillable = ['nama', 'jabatan', 'alamat', 'keterangan'];
}
