<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_roles extends Model
{
    //
    protected $table = "user_roles";
    protected $primaryKey = 'user_id';
    protected $primaryKey = 'role_id';
    public $incrementing = false;
}
