<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lectura;
class lecturaController extends Controller
{
    public function getMedidor(){
        $medidor = array();
        $medidor[] = 1;
        $medidor[] = 2;
        $medidor[] = 3;
        $medidor[] = 4;
        $medidor[] = 5;
        $medidor[] = 6;
        $medidor[] = 7;
        $medidor[] = 8;
        $medidor[] = 9;
        $medidor[] = 10;

        return $medidor;
    }
    public function getTipo(){
        //Equivalente a un select * from consolas
        $tipo = array();
        $tipo[] = "KiloWatts";
        $tipo[] = "Watts";
        $tipo[] = "Temperatura";
        return $tipo;
    }

    public function crearRegistro(Request $request){
        //Equivalente a un insert into bla bla
        $input = $request->all(); //Genera un arreglo con todo lo que mando la intefaz
        //Cuando hablo de interfaz hablo de javascript
        $lectura = new Lectura();
        $lectura->fecha = $input["fecha"];
        $lectura->hora = $input["hora"];
        $lectura->medidor = $input["medidor"];
        $lectura->direccion = $input["direccion"];
        $lectura->valor = $input["valor"];
        $lectura->tipo = $input["tipo"];

        $lectura->save();
        return $lectura;
    }
}
