@extends('layouts.index')


@section('content')
<div class="container">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-xs-5">
                        <h2>Igrejas</h2>
                        <br>
                            <a href="{{ route('igrejas.create') }}" class="button" title="Criar igreja" data-toggle="tooltip">Criar</a>
                        </br>
                        
                    </div>
                </div>
                
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>						
                        <th>Endereço</th>
                        <th>Website</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($igrejas as $igreja)
                    <tr>
                        <td>{{ $igreja->id }}</td>
                        <td><a href="{{ route('igrejas.show', $igreja->id) }}" title="Ver igreja"> {{ $igreja->nome }} </a></td>                      
                        <td>{{ $igreja->endereco }}</td>
                        <td>{{$igreja->website}}</td>
                        <td>
                            <a href="{{ route('igrejas.edit', $igreja->id) }}" class="settings" title="Update" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                        </td>
                    </tr>
                    @endforeach      
                </tbody>
            </table>
        </div>
    </div>        
</div> 


@endsection
