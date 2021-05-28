<?php

require_once "conexion.php";

class ModeloBlog{
    //mostrar contenido tabla blog

    static public function mdlMostrarBlog($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$stmt -> execute();
		return $stmt -> fetch();
		$stmt -> close();
		$stmt = null;
	}


	//mostrar contenido de categorias

	static public function mdlMostrarCategorias($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();
		$stmt = null;
	}


}