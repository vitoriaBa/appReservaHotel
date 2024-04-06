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


         public function mostrarGerenciarQuartosId(Quartos $id){
                                                  
          return view("formularioAlterarQuarto",['registrosQuartos' => $id]);
        }


        
        public function gerenciarQuarto( Request $request){
          $dadosQuarto = Quartos::query();
    
          $dadosQuarto->when($request->numeroquarto,function($query,$valor){
            $query->where('numeroquarto','like','%'.$valor.'%');
          });
          $dadosQuarto = $dadosQuarto ->get();
                                                               
          return view('gerenciarQuarto',['registrosQuartos' => $dadosQuarto]);
        }
        //deletar
        public function destroy(Quartos $id){
         $id->delete();
         return Redirect::route('home');
        }
    
        public function alterarQuartosBanco(Quartos $id, Request $request){
          
          $dadosValidos = $request->validate([
            'numeroquarto'=> 'string|required',
            'tipo'=>'string|required',
            'valordiaria'=>'string|required',
           
          ]);
          //organizar antes de enviar para o banco
          $id->fill($dadosValidos);
          $id->save();
          return Redirect::route('home');
        }

}
