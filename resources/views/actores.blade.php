@extends('plantilla')
@section('titulo')
    <h2 "display-4 text-center">Descripcion</h2>
@endsection

@section('seccion')
    


<table class="table">
    <thead>
    <tr class="table-danger" >
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Agregar</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($actors as $actor)
    <tr class="bg-ligth">
        <th scope="row">{{$actor->id}}</th>
        <td>
            <a href="/actores/{{$actor->id}}">{{$actor->first_name . " " .$actor->last_name}}</a>
        </td>
        <td>
            <a class= "btn btn-success btn-sm" href="">Agregar</a>
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
{{$actors->links()}}
@endsection