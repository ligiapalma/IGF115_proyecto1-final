<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consulta;
use Exception;

class ConsultaController extends Controller
{
    public function guardar(Request $request){
    	
    		$consulta = Consulta::create([
    			'id_medico'=> $request->input('id_medico'),
    			'id_paciente'=>$request->input('id_paciente'),
    			'resultado'=> $request->input('resultado'),
    			'tratamiento'=> $request->input('tratamiento'),
    			]);
	    	return view('user/consultaExito');
        	        

    }

    public function exito(){
    	return view('user\consultaExito');
    }
}
