<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Dosen extends Authenticatable
{
    use Notifiable;
    
    protected $table = 'dosens';
    protected $guard = 'dosen';

    protected $fillable = [
        'name','email','password',
    ];

    protected $hidden = [
      'password','remember_token',
    ];

}
