<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table='table_students';

    protected $fillable = [
        'name', 'age','gender','father_name','reglious','DOB', 'profile_image','ph_no','address',
    ];
}
