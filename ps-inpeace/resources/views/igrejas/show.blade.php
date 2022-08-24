@extends('layouts.index')


@section('content')

<div class="container">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-xs-5">
                        <h2>{{ $igreja->nome }}</h2>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Foto</th>						
                        <th>Endereço</th>
                        <th>Website</th>
                        
                        
                    </tr>
                </thead>
                <tbody>     
                    <tr>
                        
                        <td>{{ $igreja->id }}</td>
                        <td>
                            <div class="image-container">
                                <img src="/images/{{$igreja->path}}" height = 200 alt="">  
                            </div>
                        </td>                      
                        <td>{{ $igreja->endereco }}</td>
                        <td>{{$igreja->website}}</td>                      
                    </tr>
                        
                </tbody>
            </table>
        </div>
    </div>        
</div> 

@endsection
