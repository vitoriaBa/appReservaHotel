
@extends('layout')
@section('content')
 

<section class="container m-5">
  <div class="container m-5">
  <h1 class='text-center'>Gerenciar dados do Qaurto</h1>
  <form method='get' action="{{route('gerenciar-quartos')}}">

    @csrf

      <div class="row center">
        <div class="col">
          <input type="text" id="numeroquarto" name="numeroquarto" class="form-control" placeholder="Digite o numero do Quarto" aria-label="First name">
        </div>
        <div class="col">
          <button type="submit" class="btn btn-info">Pesquisar</button>
        </div>
      </div>
    </form>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Numero do Quarto</th>
        <th scope="col">Tipo</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
     
    @foreach($registrosQuartos  as  $registrosQuartosLoop)
      <tr>
        <th scope="row">{{$registrosQuartosLoop->id}}</th>
        <td>{{$registrosQuartosLoop->id}}</td>
        <td>{{$registrosQuartosLoop->numeroquarto}}</td>
        <td>{{$registrosQuartosLoop->tipo}}</td>
        <td>{{$registrosQuartosLoop->valordiaria}}</td>
      
        <td>
          <a href="">
            <button type="submit" class="btn btn-primary">O</button>
          </a>
        </td>
        
        <td>
        <form method='post'action="{{route('apaga-quartos',$registrosQuartosLoop->id)}}">
       @method('delete')
            @csrf
            <button type="submit" class="btn btn-primary">X</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</section>
@endsection