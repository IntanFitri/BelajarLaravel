<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table = 'employees';
    protected $fillable =['first_name', 'last_name', 'email','phone_number',
                        'job_id', 'hired_date', 'location_id'];
}
