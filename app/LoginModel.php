<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class LoginModel extends Model
{
    public static function validarUsuario($datos){
    	return \DB::table('usuarios as users')
    	->where('users.userr', $datos['usuario'])
    	->where('users.contra', $datos['password'])
    	->get();
    }
}
