<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table = 'matkuls';
    protected $fillable = ['nama_dosen', 'matakuliah', 'keterangan', 'nomor'];
}
