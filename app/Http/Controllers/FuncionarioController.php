<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
//talves funcionario
use App\Models\Funcionario;


class FuncionarioController extends Controller
{
    public function showHome(){
        return view("home");
         }
     
        public function showFormularioCadastroFuncionario(Request $request){
     
            return view("formularioCadastroFuncionario");
         }
     
         public function cadastrarFuncionario(Request $request){
           //dd($request);
           $dadosValidos = $request->validate([
             'nome'=> 'string|required',
             'funcao'=>'string|required'
          
           ]);
          // dd($dadosValidos);
     
      Cliente::create($dadosValidos);
      return Redirect::route('home');
         }
}
