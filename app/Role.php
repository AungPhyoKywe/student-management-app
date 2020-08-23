<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table='roles';

    protected $fillable = [
        'id', 'name','role_id'
    ];

    public function user(){

        return $this->belongsToMany('App\User','roles_users','user_id','role_id');
    }
}
