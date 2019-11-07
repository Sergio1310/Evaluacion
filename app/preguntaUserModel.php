<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class preguntaUserModel extends Model
{
    public static function Preguntas(){
    	return \DB::table('preguntas AS P')
    	->join('asignaturas as A','P.asignatura_idasignatura','=','A.id_asignatura')
    	->select('P.id_pregunta','A.nombre','P.pregunta','P.opcion1', 'P.opcion2', 'P.opcion3', 'P.opcion4','P.respuesta')
    	->get();
    }

    public static function soloPreguntas(){
    	return \DB::table('preguntas AS P')
    	->join('asignaturas as A','P.asignatura_idasignatura','=','A.id_asignatura')
    	->select( 'P.asignatura_idasignatura', 'P.pregunta')
    	->get();
    }

    public static function buscarPregunta($id_pregunta){
    	return \DB::table('preguntas AS P')
        ->where('P.id_pregunta', $id_pregunta)
        ->get();
    }
 	//SELECT preguntas.id_pregunta, asignaturas.nombre, preguntas.pregunta, preguntas.opcion1, preguntas.opcion2, preguntas.opcion3, preguntas.opcion4, opciones.respuesta
	// FROM preguntas
	// INNER JOIN opciones ON preguntas.id_pregunta = opciones.pregunta_idpregunta
	// INNER JOIN asignaturas ON preguntas.asignatura_idasignatura = asignaturas.id_asignatura

    public static function obtenerAsignaturas(){
    	return \DB::table('asignaturas')->get();
    }
    public static function insertarPregunta($pregunta, $opcion1, $opcion2, $opcion3, $opcion4, $respuesta, $asignatura){
    	return \DB::insert('insert into preguntas (pregunta, opcion1, opcion2, opcion3, opcion4, respuesta, asignatura_idasignatura) values(?,?,?,?,?,?,?)', [$pregunta, $opcion1, $opcion2, $opcion3, $opcion4, $respuesta, $asignatura]);
    }
    public static function editarPregunta($id_pregunta, $pregunta, $opcion1, $opcion2, $opcion3, $opcion4, $respuesta, $asignatura){
    	return \DB::table('preguntas AS P')
        ->where('P.id_pregunta', $id_pregunta)
        ->update(['P.pregunta' => $pregunta, 'P.opcion1' => $opcion1, 'P.opcion2' => $opcion2, 'P.opcion3' => $opcion3, 'P.opcion4' => $opcion4, 'P.respuesta' => $respuesta, 'P.asignatura_idasignatura' => $asignatura]);
    }
    public static function eliminarPregunta($id_pregunta){
    	return \DB::delete('delete from preguntas where id_pregunta = '. $id_pregunta);
    }
}
