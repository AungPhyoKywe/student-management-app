<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table='students';

    protected $fillable = [
        'name', 'age','gender','father_name','reglious','DOB', 'profile_image','ph_no','address',
    ];
    public function classes(){

        return $this->belongsToMany('App\Classes','enrolments','student_id','class_id');

    }
}
