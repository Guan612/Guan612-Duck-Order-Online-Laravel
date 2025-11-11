<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'login_id',
        'password',
        'email',
        'nickname',
        'role',
        'avatar_url',
    ];
}
