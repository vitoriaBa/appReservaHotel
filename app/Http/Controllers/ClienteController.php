<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Cliente;
class ClienteController extends Controller
{
  public function showHome(){
   return view("home");
    }

   public function showFormularioCadastro(Request $request){

       return view("formularioCadastroCliente");
    }

    public function cadastrarCliente(Request $request){
      //dd($request);
      $dadosValidos = $request->validate([
        'nome'=> 'string|required',
        'email'=>'string|required', 
        'fone'=> 'string|required'
      ]);
     // dd($dadosValidos);

 Cliente::create($dadosValidos);
 return Redirect::route('home');
    }
    
    //um cliente
    public function mostrarGerenciarClienteId(Cliente $id){
                                                  
      return view('formularioAlterarCliente',['registrosClientes' => $id]);
    }


    //todos os clintes 
    public function gerenciarCliente( Request $request){
      $dadosCliente = Cliente::query();

      $dadosCliente->when($request->nome,function($query,$valor){
        $query->where('nome','like','%'.$valor.'%');
      });
      $dadosCliente = $dadosCliente ->get();
                                                            //$idCliente
      return view('gerenciarCliente',['registrosClientes' => $dadosCliente]);
    }
    //deletar
    public function destroy(Cliente $id){
     $id->delete();
     return Redirect::route('home');
    }

    public function alterarClienteBanco(Cliente $id, Request $request){
      
      $dadosValidos = $request->validate([
        'nome'=> 'string|required',
        'email'=>'string|required', 
        'fone'=> 'string|required'
      ]);
      //organizar antes de enviar para o banco
      $id->fill($dadosValidos);
      $id->save();
      return Redirect::route('home');
    }
}
