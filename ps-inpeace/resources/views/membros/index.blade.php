@extends('layouts.index')


@section('content')
<div class="container">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-xs-5">
                        <h2>Membros</h2>
                        <br>
                            <a href="{{ route('membros.create') }}" class="button" title="Criar membro" data-toggle="tooltip">Criar</a>
                        </br>
                        
                    </div>
                </div>
                
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>						
                        <th>Data Nascimento</th>
                        <th>Email</th>
                        <th>Igreja</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($membros as $membro)
                    <tr>
                        <td>{{ $membro->id }}</td>
                        <td><a href="{{ route('membros.show', $membro->id) }}" title="Ver usuário"> {{ $membro->nome }} </a></td>
                        <td>{{ $membro->data_nascimento }}</td>                        
                        <td>{{ $membro->email }}</td>
                        @foreach ($igrejas as $igreja)
                            @if($membro->igreja_id == $igreja->id)
                            <td>{{$igreja->nome}}</td>
                            @endif
                        @endforeach
                        
                        <td>
                            <a href="{{ route('membros.edit', $membro->id) }}" class="settings" title="Update" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                            <form method ="post" action="/membros/{{ $membro->id }}">
                            @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="submit" value = "DELETE" >
                            </form>
                            <!-- <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a> -->
                        </td>
                    </tr>
                    @endforeach      
                </tbody>
            </table>
        </div>
    </div>        
</div> 


@endsection
