<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\matriculasModel;

class matriculasController extends Controller
{
    public function MostrarTablaUsuarios(){
    	$registros = MatriculasModel::Matriculas();
    	return view('Administrador.Ajax.tabla_usuarios', compact('registros'));
    }
    public function insertarMatricula(Request $request){
    	$matriculas = MatriculasModel::Matriculas();
    	$matricula = $request->input('matricula');
    	$numero = sizeof($matriculas);
    	$bandera = 0;
    	for($i = 0; $i < $numero; $i++){
    		if($matriculas[$i]->userr == $matricula){
    			$bandera = 1;
    		}
    	}
    	if($bandera == 1){
    		return 0;
    	}else{
    		$insert = matriculasModel::insertar($matricula);
    		return 1;
    	}
    }
}
