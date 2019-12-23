<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Password_resets extends Model
{
    //
    protected $table = "password_resets";
    protected $primaryKey = 'email';
    public $incrementing = false;
    protected $keyType = 'string';
}
