<?php

$server = "localhost";
$username= "root";
$password= "";
$database= "fundacion_bd";

$conexion = new mysqli($server,$username,$password,$database);

if ($conexion->connect_errno) {
echo "fallos en conexión";
exit();
}

?>