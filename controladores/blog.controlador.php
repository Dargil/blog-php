<?php

class ControladorBlog{
    //mostrar contenido tabla blog
    static public function ctrMostrarBlog(){
        $tabla = "blog";
        $respuesta = ModeloBlog::mdlMostrarBlog($tabla);
        return $respuesta;
    }
    //mostrar categorias
    static public function ctrMostrarCategorias(){
        $tabla = "categorias";
        $respuesta = ModeloBlog::mdlMostrarCategorias($tabla);
        return $respuesta;
    }


    //mostrar articulos y categorias con inner join
    static public function ctrMostrarConInnerJoin($desde,$cantidad,$item,$valor){
        $tabla1 = "categorias";
		$tabla2 = "articulos";

		$respuesta = ModeloBlog::mdlMostrarConInnerJoin($tabla1, $tabla2,$desde,$cantidad,$item,$valor);

		return $respuesta;
    }

    /*=============================================
	Mostrar total articulos
	=============================================*/

	static public function ctrMostrarTotalArticulos($item,$valor){

		$tabla = "articulos";

		$respuesta = ModeloBlog::mdlMostrarTotalArticulos($tabla,$item,$valor);

		return $respuesta;

	}


	/*=============================================
	Mostrar opiniones inner join
	=============================================*/

	static public function ctrMostrarOpiniones($item, $valor){

		$tabla1 = "opiniones";
		$tabla2 = "administradores";

		$respuesta = ModeloBlog::mdlMostrarOpiniones($tabla1, $tabla2, $item, $valor);

		return $respuesta;

	}

}
