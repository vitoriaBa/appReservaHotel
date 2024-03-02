<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
//talves funcionario
//use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\Controller;

use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    public function showHome(){
        return view("home");
         }
                         //ou showFormularioCadastro
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
     
      Funcionario::create($dadosValidos);
      return Redirect::route('home');
         }
}
