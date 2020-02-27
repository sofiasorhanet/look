@extends('plantilla')

@section('titulo')
    <h2 "display-4 text-center">Datos del Actor</h2>
@endsection

@section('seccion')
    <div>
        <ul>
            <li>Nombre:{{$actor->first_name}}</li>
            <li>Apellido:{{$actor->last_name}}</li>
            <li>Rating:{{$actor->rating}}</li>            
        </ul>
    </div>

    <div class="container md">
        <h3>Actores</h3>
         
        <p>{{$actor->first_name . " " .$actor->last_name}}</p>
        
    </div>
@endsection