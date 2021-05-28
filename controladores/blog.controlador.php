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

}
