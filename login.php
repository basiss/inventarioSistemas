<?session_start();?>
<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="iso-8859-1">
<meta name="description" content="PROCESOS AUTOMATICOA">
<meta name="keywords" content="WEB, PROCESOS, AUTOMATICOS">
<title>Inventario de Sistemas</title>
<link rel="stylesheet" href="estilos.css">
</head>


	<body>
		<div id="agrupar">

			<header id="cabecera">
				<h1>Inventario de Sistemas</h1>
			</header>


	<nav>
    		<ul>
       		<li><a >INICIO</a></li>               
       		<li><a >PANEL</a></li>               
       		<li><a >ASIGNAR</a></li>               
       		<li><a >CARGAR</a></li>               
       		<li><a >DESCARGAR</a></li>               
       		<li><a >Salir</a></li>
    
    		</ul>
		</nav>



			<section>
<h2>Por favor introduzca su nombre de usuario y password para poder acceder.</h2>

				<br/>
				<form name="log" action="log_action.php" method="post">
				Username: <input class="form" type="text" name="user"><br/> <br/>
				Password: <input class="form" type="password" name="password"><br/><br/>
				<input name="Submit" type="submit" value="Acceder">
				</form>
			</section>



			<footer id="pie">
			VERSION 0.0
			</footer>
		</div>
	</body>
</html>