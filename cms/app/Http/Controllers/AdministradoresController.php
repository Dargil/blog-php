<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administradores;
use App\Blog;

class AdministradoresController extends Controller
{
    	/*=============================================
	Mostrar todos los registros
	=============================================*/
    public function index(){
        $administradores=Administradores::all();
        $blog=Blog::all();
        return view("paginas.administradores",array("administradores"=>$administradores,"blog"=>$blog));
    }



    /*=============================================
	Mostrar un solo registro
	=============================================*/

	public function show($id){

		$administrador = Administradores::where("id", $id)->get();
		$blog = Blog::all();
		$administradores = Administradores::all();

		if(count($administrador) != 0){

			return view("paginas.administradores", array("status"=>200, "administrador"=>$administrador, "blog"=>$blog, "administradores"=>$administradores));
		
		}else{ 

			return view("paginas.administradores", array("status"=>404, "blog"=>$blog, "administradores"=>$administradores));
		}
	}
}
