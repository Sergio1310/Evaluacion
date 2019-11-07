<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matriculasModel extends Model
{
    public static function Matriculas(){
    	return \DB::table('usuarios AS m')->get();
    }
    public static function insertar($matricula){
    	return \DB::insert('insert into usuarios (userr, tipouser_Idtipouser) values(?,?)', [$matricula,2]);
    }
}
