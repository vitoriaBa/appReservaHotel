
@extends('layout')
@section('content')
 

<section class="container m-5">
  <div class="container m-5">
  <h1 class='text-center'>Gerenciar dados do Qaurto</h1>
    <form >

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
     
      <tr>
        <th scope="row">01</th>
        <td>119897-999</td>
        <td>Samsung</td>
        <td>
          <a href="">
            <button type="button" class="btn btn-primary">X</button>
          </a>
        </td>
        xx
        <td>
         xxx
        </td>
      </tr>
   
    </tbody>
  </table>
</section>
@endsection