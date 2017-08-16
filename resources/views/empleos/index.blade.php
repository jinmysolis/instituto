@extends('layouts.myapp3')

@section('content')
<h1>Empleos</h1>
<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>Nombre</td>
                <td>apellido</td>
                <td>email</td>
                <td>cargo que busca</td>
                <td>pais</td>
                <td>ciudad</td>
                <td>telefono movil</td>
                <td>genero</td>
              </tr>
        </thead>
        <tbody>
            @foreach($empleos  as $empleo)
            <tr>
                <td>{{$empleo->primer_nombre}}</td>
                <td>{{$empleo->apellidos}}</td>
                <td>{{$empleo->email}}</td>
                <td>{{$empleo->cargo_que_busca}}</td>
                <td>{{$empleo->pais}}</td>
                <td>{{$empleo->ciudad}}</td>
                <td>{{$empleo->telefono_movil}}</td>
                <td>{{$empleo->genero}}</td>
                
            </tr>
            @endforeach
        </tbody>
        
    </table>
    
    
</div>

@endsection