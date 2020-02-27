@extends('plantilla')

@section('titulo')
<h1 class="display-4 text-center">Peliculas</h1>
@endsection

@section('seccion')
    <table class="table">
        <thead>
        <tr class="table-danger" >
            <th scope="col">#</th>
            <th scope="col">Titulo</th>
            <th scope="col">Agregar</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($peliculas as $pelicula)
        <tr class="bg-ligth">
            <th scope="row">{{$pelicula->id}}</th>
            <td>
                <a href="/pelicula/{{$pelicula->id}}">{{$pelicula->title}}</a>
            </td>
            <td>
                <a class= "btn btn-success btn-sm" href="/agregarPelicula">Agregar</a>
            </td>
            <td>
                <a class= "btn btn-warning btn-sm" href="">Editar</a>
            </td>

            
            <td>
                <form action=""" method="post">
                @csrf
                @method('DELETE')
                    <button type="submit" class= "btn btn-danger btn-sm" href="">Eliminar</button>
                </form>
            </td>
            
        </tr>
        @endforeach
        </tbody>
    </table>
    {{$peliculas->links()}}
@endsection
