@extends('layouts.create')



@section('content')
    <form method="post" action="/membros">
      @csrf
        <div class="form-group"> 
            <label for="inputNome">Nome</label>
            <input type="text" name="nome" class="form-control" placeholder="Seu nome" >
        </div>
        <div class="form-group"> 
            <label for="inputCPF">CPF</label>
            <input type="text" name="CPF" class="form-control" placeholder="XXX.XXX.XXY-XX">
        </div>
        <div class="form-group"> 
            <label for="inputEmail">Email</label>
            <input type="text" name="email" class="form-control" placeholder="usuario@usuario.com">
        </div>
        <div class="form-group"> 
            <label for="inputTelefone">Telefone</label>
            <input type="text" name="telefone" class="form-control" placeholder="(XX) XXXXX-XXXX">
        </div>
        <div class="form-group"> 
            <label for="inputLogradouro">Logradouro</label>
            <input type="text" name="logradouro" class="form-control" placeholder="Seu endereço">
        </div>

        <div class="form-group"> 
            @livewire('dynamic-dropdown')
        </div>

        <div class="form-group"> 
            <label for="inputDataNascimento">Data de Nascimento</label>
            <input type="date" name="data_nascimento">
        </div>
        
        <div class="form-group"> 
            <label for="inputIgreja">Sua igreja:</label>
            <select id="igrejas" name="igreja_id" class = "form-control">
                <option value="" selected>{{__('Selecione sua igreja...')}}</option>
                @foreach ($igrejas as $igreja)              
                    <option value= {{ $igreja->id }}>{{ $igreja->nome}}</option>
                @endforeach
            </select>
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


