@extends('layouts.create')


@section('content')

<form method="post" action="/membros/{{$membro->id}}">
      @csrf
      <input type="hidden" name="_method" value="PUT">
        <div class="form-group"> 
            <label for="inputNome">Nome</label>
            <input type="text" name="nome" class="form-control" placeholder="" value = "{{ $membro->nome }}">
        </div>
        <div class="form-group"> 
            <label for="inputCPF">CPF</label>
            <input type="text" name="CPF" class="form-control" placeholder="" value = "{{ $membro->CPF }}">
        </div>
        <div class="form-group"> 
            <label for="inputEmail">Email</label>
            <input type="text" name="email" class="form-control" placeholder="" value = "{{ $membro->email }}">
        </div>
        <div class="form-group"> 
            <label for="inputTelefone">Telefone</label>
            <input type="text" name="telefone" class="form-control" placeholder="" value = "{{ $membro->telefone }}">
        </div>
        <div class="form-group"> 
            <label for="inputLogradouro">Logradouro</label>
            <input type="text" name="logradouro" class="form-control" placeholder="" value = "{{ $membro->logradouro }}">
        </div>
        <div class="form-group"> 
            <label for="inputDataNascimento">Data de Nascimento</label>
            <input type="date" name="data_nascimento"  value = "{{ $membro->data_nascimento }}">
        </div>

        <div class="form-group"> 
            <label for="inputIgreja">Sua igreja:</label>
            <select id="igrejas" name="igreja_id">
                @foreach ($igrejas as $igreja)              
                    <option value= {{ $igreja->id }}>{{ $igreja->nome}}</option>
                @endforeach
            </select>
        </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <form method ="post" action="/membros/{{ $membro->id }}">
    @csrf
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value = "DELETE" >
    </form>

@endsection
