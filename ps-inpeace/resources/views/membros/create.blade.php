@extends('layouts.create')



@section('content')
    <form method="post" action="/membros">
      @csrf
        <div class="form-group"> 
            <label for="inputNome">Nome</label>
            <input type="text" name="nome" class="form-control" placeholder="Nome">
        </div>
        <div class="form-group"> 
            <label for="inputEndereco">Endereço</label>
            <input type="text" name="endereco" class="form-control" placeholder="Endereço">
        </div>
        <div class="form-group"> 
            <label for="inputWebsite">Website</label>
            <input type="text" name="website" class="form-control" placeholder="Endereco">
        </div>
        <div class="form-group"> 
            <label for="inputWebsite">Sua igreja:</label>
            <select id="igrejas" name="igreja_id">
                @foreach ($igrejas as $igreja)              
                    <option value= {{ $igreja->id }}>{{ $igreja->nome}}</option>
                @endforeach
            </select>
        </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

        


    
@endsection


