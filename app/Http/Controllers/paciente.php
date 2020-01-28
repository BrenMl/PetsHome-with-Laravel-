<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pacientes;
use DB;


class paciente extends Controller
{
  //public function __construct(){
    //$this->middleware('validar');
  //}

  public function mostrarFormulario()
{
  	$consulta=DB::table('Registros')->get();
     return view('registro',compact('consulta'));
}

public function guardarPaciente(Request $datos)
{
	$valores =$datos->all();
	$pacientes = new Pacientes();
  $pacientes->IdCliente=$valores['id'];
	$pacientes->Nombre=$valores['nombre'];
	$pacientes->especie=$valores['especie'];
  $pacientes->raza=$valores['raza'];
  $pacientes->fechaNacimiento=$valores['fechaNacimiento'];
	$pacientes->save();
  $consulta=DB::table('Registros')->get();
   return view('registro',compact('consulta'));
//  $consulta='';
	//$saludo='Registro Correcto';
	//return view('registro',compact('consulta'));
	//return view('registro',[compact('saludo')]);
}
public function consultar(){
$consulta=DB::table('Pacientes')->get();
return view('consultar',compact('consulta'));

}
public function mostrarEliminar(){
  return view('eliminar');
}

public function eliminarPaciente($id){
  DB::table('Pacientes')->where('idmascota',$id)->delete();
  	$consulta=DB::table('Pacientes')->get();
  	return view('consultar',compact('consulta'));
}

public function mostrarModi(){
 $idM='';
 $idC='';
 $nom='';
 $espec='';
 $raz='';
 $Fna='';
$consulta=DB::table('Pacientes')->get();
$consultaR=DB::table('Registros')->get();
 return View('modificar',compact('consulta','consultaR','idM','idC','nom','espec','raz','Fna'));

}
public function bus(Request $datos){
$consulta=DB::table('Pacientes')->get();
  $valores = $datos->all();
    $id=$valores['id'];
    $pacien=DB::table('Pacientes')->where('idmascota',$id)->first();

    if($pacien!=null){
  $idM=$pacien->idmascota;
  $idC=$pacien->IdCliente;
  $nom=$pacien->Nombre;
  $espec=$pacien->especie;
  $raz=$pacien->raza;
  $Fna=$pacien->fechaNacimiento;
    return view('modificar',compact('consulta','idM','idC','nom','espec','raz','Fna'));
  }else{
    return view('error');
  }
}
public function modificacion(Request $datos){
      $valores = $datos->all();
      $id=$valores['id'];
      DB::table('Pacientes')->where('idmascota',$id)->update(['IdCliente'=>$valores['idcliente'],'Nombre'=>$valores['nom'],'especie'=>$valores['espe'],'raza'=>$valores['raz'],'fechaNacimiento'=>$valores['Fna']]);


      return redirect('Modificar');
    }
}
