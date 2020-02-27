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
}
