<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoginModel;

class LoginController extends Controller
{
    public function verificarUsuario(Request $request){
    	$usuario = $request->input('name_user');
    	$contraseña = $request->input('name_password');
    	$datos = array('usuario' => $usuario, 'password' => $contraseña);

    	$var = LoginModel::validarUsuario($datos);
    	$datos_Usuario = json_decode($var);
    	
    	if($datos_Usuario[0]->tipouser_Idtipouser == 1){
    		return redirect('/administrador/menu');
    	}
    	if($datos_Usuario[0]->tipouser_Idtipouser == 2){
    		return redirect('/alumno/menu');
    	}
    }
}
