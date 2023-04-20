<?php

include("conexion.php");

$nombre = $_COOKIE['NOMBRE'];
$apellido = $_COOKIE['APELLIDO'];
$telefono = $_COOKIE['TELEFONO'];

$sql = "INSERT INTO participantes (nombre, apellido, telefono) VALUES ('$nombre', '$apellido', '$telefono')";

$insercion_sql = mysqli_query($conexion, $sql);



if ($insercion_sql) {
	setcookie("NOMBRE", "");
	setcookie("APELLIDO", "");
	setcookie("TELEFONO", "");
	header("location:inscripcion.php?esta_insertado=1");
} else {
	header("location:inscripcion.php?esta_insertado=0");
}

?>