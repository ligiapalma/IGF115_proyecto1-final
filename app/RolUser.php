<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolUser extends Model
{
    protected $fillable = [
        'user_id', 'rol_id',
    ];
}
