<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    protected $table='table_timetables';

    protected $fillable = [
         'class_id', 'teacher_id','date','start_time','end_time'
    ];
}
