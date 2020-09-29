<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'penggunas';
    protected $fillable =['first_name', 'last_name', 'username', 'password', 'type_id', 'location_id',
                        'phone_number'];
}
