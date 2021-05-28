<?php
$blog=ControladorBlog::ctrMostrarBlog();
//echo '<pre class="bg-white">';print_r($blog["dominio"]);echo'</pre>';
$categorias=ControladorBlog::ctrMostrarCategorias();
//echo '<pre class="bg-white">';print_r($categorias);echo'</pre>';
$articulos=ControladorBlog::ctrMostrarConInnerJoin(5);

$totalArticulos=ControladorBlog::ctrMostrarTotalArticulos();
//echo '<pre class="bg-white">';print_r($articulos);echo'</pre>';

$totalPaginas= ceil(count($totalArticulos)/5);




?>


<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
	<?php

	if(isset($_GET["pagina"])){
		$is_found_page=FALSE;
		foreach($categorias as $key => $value){
			if($_GET["pagina"]==$value["ruta_categoria"]){
				$is_found_page=TRUE;

				//metadatos de la pagina 404  not found
				echo '  <title>'.$blog["titulo"].' | '.$value['descripcion_categoria'].'</title>
				<meta name="title" content="'.$value['titulo_categoria'].'">
				<meta name="description" content="'.$value['descripcion_categoria'].'">';


				$palabras_claves=json_decode($value['p_claves_categoria'],true);
				$p_claves="";
				foreach ($palabras_claves as $key =>$value){
				$p_claves.=$value.", ";
				}
				$p_claves=substr($p_claves,0,-2);

				echo '<meta name="keywords" content="'.$p_claves.'">';
				break;
			}
		}
		if(!$is_found_page){
								//metadatos de la pagina 404  not found
			echo '  <title>'.$blog["titulo"].'</title>
					<meta name="title" content="'.$blog["titulo"].'">
				<meta name="description" content="'.$blog["descripcion"].'">';
			

			$palabras_claves=json_decode($blog["palabras_claves"],true);
			$p_claves="";
			foreach ($palabras_claves as $key =>$value){
					$p_claves.=$value.", ";
			}
			$p_claves=substr($p_claves,0,-2);
				
			echo '<meta name="keywords" content="'.$p_claves.'">';
		}

	}else{
		//metadatos de la pagina de inicio
		echo '  <title>'.$blog["titulo"].'</title>
 				<meta name="title" content="'.$blog["titulo"].'">
				<meta name="description" content="'.$blog["descripcion"].'">';
			

			$palabras_claves=json_decode($blog["palabras_claves"],true);
			$p_claves="";
			foreach ($palabras_claves as $key =>$value){
					$p_claves.=$value.", ";
			}
			$p_claves=substr($p_claves,0,-2);
				
			echo '<meta name="keywords" content="'.$p_claves.'">';
				
	}

	?>


	<link rel="icon" href="<?php echo $blog["icono"]; ?>">

	<!--=====================================
	PLUGINS DE CSS
	======================================-->
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<link href="https://fonts.googleapis.com/css?family=Chewy|Open+Sans:300,400" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">

	<!-- JdSlider -->
	<!-- https://www.jqueryscript.net/slider/Carousel-Slideshow-jdSlider.html -->
	<link rel="stylesheet" href="vistas/css/plugins/jquery.jdSlider.css">

	<link rel="stylesheet" href="vistas/css/style.css">

	<!--=====================================
	PLUGINS DE JS
	======================================-->

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<!-- JdSlider -->
	<!-- https://www.jqueryscript.net/slider/Carousel-Slideshow-jdSlider.html -->
	<script src="vistas/js/plugins/jquery.jdSlider-latest.js"></script>
	
	<!-- pagination -->
	<!-- http://josecebe.github.io/twbs-pagination/ -->
	<script src="vistas/js/plugins/pagination.min.js"></script>

	<!-- scrollup -->
	<!-- https://markgoodyear.com/labs/scrollup/ -->
	<!-- https://easings.net/es# -->
	<script src="vistas/js/plugins/scrollUP.js"></script>
	<script src="vistas/js/plugins/jquery.easing.js"></script>

</head>

<?php

	//modulos fijos superiores
	include "paginas/modulos/cabecera.php";
	include "paginas/modulos/redes-sociales-movil.php";
	include "paginas/modulos/buscador-movil.php";
	include "paginas/modulos/menu.php";

	// Navegar entre paginas

	//include "paginas/inicio.php";
	//include "paginas/categorias.php";

	if(isset($_GET["pagina"])){
		$is_found_page=FALSE;
		foreach($categorias as $key => $value){
			if($_GET["pagina"]==$value["ruta_categoria"]){
				include "paginas/categorias.php";
				$is_found_page=TRUE;
				break;
			}
		}
		if(!$is_found_page){
				include "paginas/404.php";
		}

	}else{
		include "paginas/inicio.php";
	}

	


	//modulos fijos inferiores

	include "paginas/modulos/footer.php";


?>


<body>
<script src="vistas/js/script.js"></script>


</body>
</html>