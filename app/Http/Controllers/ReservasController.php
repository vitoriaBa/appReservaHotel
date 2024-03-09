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
        //  dd($request);
           $dadosValidos = $request->validate([
             'idcliente'=> 'integer|required',
             'idfuncionario'=>'integer|required', 
             'numeroquarto'=> 'integer|required',
             'situacao'=> 'string|required',
             'valortotal'=> 'numeric|required',
             'dataentrada'=> 'date|required',
             'datasaida'=> 'date|required',
             
             
           ]);
          
          // dd($dadosValidos);
   Reservas::create($dadosValidos);
     return Redirect::route('home');
         }
}
