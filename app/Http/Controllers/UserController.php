<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('Administrador.preguntas');
    }
    public function menu(){
        return view('menu');
    }
}
