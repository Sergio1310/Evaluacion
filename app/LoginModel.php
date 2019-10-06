<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class LoginModel extends Model
{
    public static function validarUsuario($datos){
    	return \DB::table('usuarios as users')
    	->where('users.user', $datos['usuario'])
    	->where('users.password', $datos['password'])
    	->get();
    }
}
