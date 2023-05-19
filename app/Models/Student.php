<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Student extends Authenticatable implements AuthenticatableContract
{
    use Notifiable;

    // ...

    protected $fillable = [
        'name', 'email', 'username', 'password', 'kelas', 'golongan','profile_image'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
