<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Quartos;
class QuartosController extends Controller
{
    public function showHome(){
        return view("home");
         }
                           //showFormularioCadastro
        public function showFormularioCadastroQuarto(Request $request){
     
            return view("formularioCadastroQuarto");
         }
     
         public function cadastrarQuarto(Request $request){
         
           $dadosValidos = $request->validate([
             'numeroquarto'=> 'integer|required',
             'tipo'=>'string|required', 
             'valordiaria'=> 'numeric|required'
                       //double
           ]);
       
          
     Quartos::create($dadosValidos);
    return Redirect::route('home');
         }
}
