<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$bsd = "almacen"; 

$conexion = mysql_connect($servidor, $usuario, $clave) or die("no se conecto mysql");

mysql_select_db($conexion, $bsd) or die("no se encontro la base de datos");

?>
