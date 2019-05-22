<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminKP extends Authenticatable
{
    use Notifiable;
    
    protected $table = 'adminkps';
    protected $guard = 'adminkp';

    protected $fillable = [
        'name','email','password',
    ];

    protected $hidden = [
      'password','remember_token',
    ];

}
