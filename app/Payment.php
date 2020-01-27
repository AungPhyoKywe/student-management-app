<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table='payments';

    protected $fillable = [
        'payment_title', 'payment_date','payment_description','student_id','amount','status'
    ];
}
