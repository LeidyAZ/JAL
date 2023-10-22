<?php 
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$json = file_get_contents('php://input');

$params = json_decode($json);

require("../conexion.php");

//$ins = "insert into usuarios (nombre, usuario, clave, tipo) values('Prueba', 'prueba', shal ('123456'), 'Invitado')";

$ins = "insert into usuarios (nombre, usuario, clave, tipo) values('$params ->nombre', '$params ->usuario', shal ('$params ->clave'), '$params ->tipo')";

mysqli_query($conexion, $ins) or die('no inserto');

class Result {}

$response = new Result();
$response ->resultado = 'ok';
$response ->mensaje = 'datos grabados';

header('Content-Type: application/json'); 
echo json_encode($response);
?>
