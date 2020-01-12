<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table='table_classes';

    protected $fillable = [
        'class_id', 'class_name'
    ];
}
