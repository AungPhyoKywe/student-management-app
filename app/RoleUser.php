<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    protected $table='roles_users';

    protected $fillable = [
        'id', 'user_id','role_id'
    ];
}
