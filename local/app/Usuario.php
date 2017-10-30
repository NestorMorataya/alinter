<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

/**
 * Class DummyClass
 */
class Usuario extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $table = 'usuario';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'usuario',
        'password',
        'contrasena',
        'remember_token',
        'rol',
    ];

    protected $guarded = [];

        
}