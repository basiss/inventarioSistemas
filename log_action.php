<?php

#starts a new session
session_start();

#includes a database connection
include 'inc/conexion.php';

#catches user/password submitted by html form
$usuario = $_POST['user'];
$pass = $_POST['password'];

if(empty($usuario) || empty($pass)){
     echo "campos vacios";
      exit();
}
 
#mysql_connect('localhost','root','') or die("Error al conectar " . mysql_error());
#mysql_select_db('inventariosistemas') or die ("Error al seleccionar la Base de datos: " . mysql_error());

$result = mysql_query("SELECT * from accesos where usuario='" . $usuario . "'");
 
if($row = mysql_fetch_array($result)){
if($row['password'] == $pass){
session_start();
$_SESSION['user'] = $usuario;
header("Location: index.php");
}else{
#header("Location: index.html");
ECHO "PASSWORD INCORRECTO";

exit();
}
}else{
#header("Location: index.html");
ECHO "NO EXISTE USUARIO";

exit();
}
 
 




?>
