<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission_role extends Model
{
    //
    protected $table = "permission_roles";
    protected $primaryKey = 'permission_id';
    protected $primaryKey = 'role_id';
    public $incrementing = false;

}
