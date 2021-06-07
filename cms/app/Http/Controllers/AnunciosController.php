<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anuncios;

class AnunciosController extends Controller
{
    public function traerAnuncios(){
        $anuncios=Anuncios::all();
        return view("paginas.anuncios",array("anuncios"=>$anuncios));
    }
}
