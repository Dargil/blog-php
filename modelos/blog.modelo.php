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

	/*=============================================
	Mostrar artículos y categorías con inner join
	=============================================*/

	static public function mdlMostrarConInnerJoin($tabla1, $tabla2,$desde,$cantidad){
		$stmt = Conexion::conectar()->prepare("SELECT $tabla1.*, $tabla2.*, DATE_FORMAT(fecha_articulo, '%d.%m.%Y') AS fecha_articulo FROM $tabla1 INNER JOIN $tabla2 ON $tabla1.id_categoria = $tabla2.id_cat ORDER BY $tabla2.id_articulo DESC LIMIT $desde, $cantidad");
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	Mostrar total articulos
	=============================================*/

	static public function mdlMostrarTotalArticulos($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();

		$stmt = null;
	
	}




}