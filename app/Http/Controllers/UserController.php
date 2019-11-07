<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\preguntaUserModel;

class UserController extends Controller
{
    public function index(){
    	return view('Alumno.dashboard');
    }
    public function pregunta(){
    	return view('Alumno.pregunta');
    }
    public function cedula(){
    	return view('Alumno.cedula');
    }
    public function login(){
    	return view('Login');
    }
    public function AdministradorUsuarios(){
        return view('Administrador.usuarios');
    }
    public function AdministradorPreguntas(){
        $asignaturas = preguntaUserModel::obtenerAsignaturas();
        return view('Administrador.preguntas', compact('asignaturas'));
    }
    public function menu(){
        return view('menu');
    }
}
