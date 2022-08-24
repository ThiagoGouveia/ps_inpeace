@extends('layouts.index')


@section('content')

<div class="container">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-xs-5">
                        <h2>{{ $membro->nome }}</h2>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>CPF</th>
                        <th>Data Nascimento</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Logradouro</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>Igreja</th>
                        
                    </tr>
                </thead>
                <tbody>     
                    <tr>
                        
                        <td>{{ $membro->CPF }}</td>
                        <td>{{ $membro->data_nascimento }}</td>                        
                        <td>{{ $membro->email }}</td>
                        <td>{{ $membro->telefone }}</td>
                        <td>{{ $membro->logradouro }}</td>
                        <td>{{ $membro->cidade }}</td>
                        <td>{{ $membro->estado}}</td>
                        @foreach ($igrejas as $igreja)
                            @if($membro->igreja_id == $igreja->id)
                            <td>{{$igreja->nome}}</td>
                            @endif
                        @endforeach
                        
                    </tr>
                        
                </tbody>
            </table>
        </div>
    </div>        
</div> 

@endsection
