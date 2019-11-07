<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\preguntaUserModel;

class preguntaUserController extends Controller
{
    public function MostrarTablaPreguntas(){
    	$registros = preguntaUserModel::Preguntas();
    	$asignaturas = preguntaUserModel::obtenerAsignaturas();
    	return view('Administrador.Ajax.tabla_preguntas', compact('registros', 'asignaturas'));
    }

    public function insertarPregunta(Request $request){
    	$preguntas = preguntaUserModel::soloPreguntas();

    	$asignatura = $request->input('asignatura');
		$pregunta = $request->input('pregunta');
		$opcion1 = $request->input('opcion1');
		$opcion2 = $request->input('opcion2');
		$opcion3 = $request->input('opcion3');
		$opcion4 = $request->input('opcion4');
		$respuesta = $request->input('respuesta');

		$numero = sizeof($preguntas);
		$bandera = 0;

		for($i = 0; $i < $numero; $i++){
    		if($preguntas[$i]->asignatura_idasignatura == $asignatura && $preguntas[$i]->pregunta == $pregunta){
    			$bandera = 1;
    		}
    	}
    	if($bandera == 1){
    		return 0;
    	}else{
    		if($respuesta == 1){
    			$insertar = preguntaUserModel::insertarPregunta($pregunta, $opcion1,  $opcion2, $opcion3, $opcion4, $respuesta, $asignatura);
    		}
    		if($respuesta == 2){
    			$insertar = preguntaUserModel::insertarPregunta($pregunta, $opcion1,  $opcion2, $opcion3, $opcion4, $respuesta, $asignatura);
    		}
    		if($respuesta == 3){
    			$insertar = preguntaUserModel::insertarPregunta($pregunta, $opcion1,  $opcion2, $opcion3, $opcion4, $respuesta, $asignatura);
    		}
    		if($respuesta == 4){
    			$insertar = preguntaUserModel::insertarPregunta($pregunta, $opcion1,  $opcion2, $opcion3, $opcion4, $respuesta, $asignatura);
    		}
    		return 1;
    	}
    }
    public function eliminarPregunta(Request $request){
    	$id = $request->input('id');
    	$eliminar = preguntaUserModel::eliminarPregunta($id);
    }

    public function buscarPregunta(Request $request){
    	$id = $request->input('id');
    	return $pregunta = preguntaUserModel::buscarPregunta($id);
    }

    public function editarPregunta(Request $request){
    	$asignatura = $request->input('asignatura');
		$pregunta = $request->input('pregunta');
		$opcion1 = $request->input('opcion1');
		$opcion2 = $request->input('opcion2');
		$opcion3 = $request->input('opcion3');
		$opcion4 = $request->input('opcion4');
		$respuesta = $request->input('respuesta');

		$editar = preguntaUserModel::editarPregunta($id_pregunta, $pregunta, $opcion1, $opcion2, $opcion3, $opcion4, $respuesta, $asignatura);
    }
}
