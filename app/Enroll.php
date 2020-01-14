<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    protected $table='enrolments';

    protected $fillable = [
        'student_id', 'class_id','enrolment_date'
    ];
}
