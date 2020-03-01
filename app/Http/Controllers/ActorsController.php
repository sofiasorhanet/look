<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
class ActorsController extends Controller
{
    public function listar(){
        $actors=Actor::orderBy('id','ASC')->paginate(5);
        return view('actores',compact('actors'));
    }

    public function describirse($id){
        $actor=Actor::find($id);
        return view('/describirse', compact('actor'));
    }

    public function mostrar(){
        return view('/agregarActor');
    }

    public function agregarActor(Request $datos){
        $validaciones =[
          "first_name" => 'required',
          "last_name" => 'required',
          "rating" => 'required|numeric',
      

        ];

        $this->validate($datos, $validaciones);
    

        $actorNuevo=new Actor;

        $actorNuevo->first_name=$datos["first_name"];
        $actorNuevo->last_name=$datos["last_name"];
        $actorNuevo->rating=$datos["rating"];
       

        $actorNuevo->save();

        return back()->with('mensaje','Actor Agregado, Gracias!!');

    }
}
