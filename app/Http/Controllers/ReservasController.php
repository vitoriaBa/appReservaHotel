<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Reservas;

class ReservasController extends Controller
{
    public function showHome(){
        return view("home");
         }
     
        public function showFormularioCadastroReserva(Request $request){
     
            return view("formularioCadastroReserva");
         }
     
         public function cadastrarReserva(Request $request){
         
           $dadosValidos = $request->validate([
             'idcliente'=> 'integer|required',
             'idfuncionario'=>'integer|required', 
             'idquarto'=> 'integer|required',
             'situacao'=> 'string|required',
             'valortotal'=> 'string|required',
             'datasaida'=> 'string|required',
             'dataentrada'=> 'string|required',
             
           ]);
          
     //ver certinho depois da errrado pegar de alguem
      Reservas::create($dadosValidos);
      return Redirect::route('home');
         }
}
