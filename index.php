
<?php
	header('Content-Type: text/html; charset=UTF-8');
//creamos la sesion
session_start();
///creamos variable para mostrar nombre de usuario
$usuario = $_SESSION['user'];


//validamos si se ha hecho o no el inicio de sesion correctamente
//si no se ha hecho la sesion nos regresará a login.html
if(is_null($_SESSION['user'])) 
{
  header('Location: login.php'); 
  exit();
}

//mostramos el nombre de usuario

//echo $usuario;




 ?>


<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="iso-8859-1">
<meta name="description" content="InventarioSistemas">
<meta name="keywords" content="WEB, Inventario, Sistemas">
<title>Inventario de sistemas</title>
<link rel="stylesheet" href="style/estilos.css">
</head>



<body>

	<div id="agrupar">

		<header id="cabecera">
			<h1>Inventario de Sistemas</h1>
		</header>



	<nav>
    		<ul>
       		<li><a href="inicio.html" target="contenido">INICIO</a></li>               
       		<li><a href="panel.php" target="contenido">PANEL</a></li>               
       		<li><a href="asignar.php" target="contenido">ASIGNAR</a></li>               
       		<li><a href="cargar.php" target="contenido">CARGAR</a></li>               
       		<li><a href="DESCARGAr.PHP" target="contenido">DESCARGAS</a></li>               
       		<li><a href="logout.php">Salir</a></li>
    
    		</ul>
		</nav>

		<section id="seccion">
		

	<iframe name="contenido" src="inicio.html" width="1200" height="550" frameborder="0">Tu navegador no soporta iframes</iframe>


		</section>
	
			<footer id="pie">
				version 0
			</footer>  

	
	</div>

</body>

</html>