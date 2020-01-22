<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table='exam';

    protected $fillable = [
        'name', 'description','question_file','class_id','subject_id','exam_date', 'start_time','end_time'
    ];
}
