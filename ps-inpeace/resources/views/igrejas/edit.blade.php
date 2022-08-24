@extends('layouts.create')



@section('content')
    <form method="post" action="/igrejas/{{$igreja->id}}" enctype="multipart/form-data">
      @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group"> 
            <label for="inputNome">Nome</label>
            <input type="text" name="nome" class="form-control" placeholder="Nome" value = "{{ $igreja->nome }}">
        </div>
        <div class="form-group"> 
            <label for="inputEndereco">Endereço</label>
            <input type="text" name="endereco" class="form-control" placeholder="Endereço" value = "{{ $igreja->endereco }}">
        </div>
        <div class="form-group"> 
            <label for="inputWebsite">Website</label>
            <input type="text" name="website" class="form-control" placeholder="Endereco" value = "{{ $igreja->website }}">
        </div>

        <div class="form-group"> 
            <label for="inputWebsite">Foto</label>
            <input type="file" name="file" class="form-control" placeholder="Endereco">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    
    @if(count($errors)>0)
    <br>
        <div class="alert alert-danger">
            Preencha todos os campos 
        </div>
    @endif
        
@endsection


