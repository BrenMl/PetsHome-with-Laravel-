<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class Validacion extends Controller
{
 public function iniciarSesion(Request $datos)
  {
 $valores=$datos->all();
 if($valores['usuario']=='brenda' && $valores['pass']=='binario'){
   $datos->session()->put('usuario',$valores['usuario']);
   return view('registro');
 }else{
   return view('login',['m'=>'Datos incorrectos']);
 }
  }

    public function login(){

      return view('login');


    }

    public function cerrarSesion()
    {
  //  Session::forget('usuario');
  Session::flush();
    return view('login');
    }
}
