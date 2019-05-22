<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminTA extends Authenticatable
{
    use Notifiable;

    protected $table = 'admintas';
    protected $guard = 'adminta';

    protected $fillable = [
        'name','email','password',
    ];

    protected $hidden = [
      'password','remember_token',
    ];

}
