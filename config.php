<?php

$servidor='localhost';
$usuario='root';
$pass='root';
$bd='eventos';


$conexion = new mysqli($servidor, $usuario, $pass, $bd);	


$conexion->set_charset('utf8');


if ($conexion->connect_errno) {
	echo "Error al conectar la base de datos {$conexion->connect_errno}";
}


$base_url="http://localhost/calendario/";

?>
