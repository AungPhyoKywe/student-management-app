<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table='classes';
    protected $primaryKey= 'class_id';

    protected $fillable = [
        'class_id', 'class_name','class_teacher'
    ];

    public function student(){

        return $this->belongsToMany('App\Student','enrolments','student_id','class_id');
    }
}
