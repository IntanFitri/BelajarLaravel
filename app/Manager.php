<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    protected $table = 'managers';
    protected $fillable =['first_name', 'last_name', 'location_id', 'email', 'phone_number'];
}
