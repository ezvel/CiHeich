<?php

include("conexion.php");

$nombre = $_COOKIE['NOMBRE'];
$apellido = $_COOKIE['APELLIDO'];

$sql = "INSERT INTO participantes (nombre, apellido) VALUES ('$nombre', '$apellido')";

$insercion_sql = mysqli_query($conexion, $sql);



if ($insercion_sql) {
	setcookie("NOMBRE", "");
	setcookie("APELLIDO", "");
	header("location:inscripcion.php?esta_insertado=1");
} else {
	header("location:inscripcion.php?esta_insertado=0");
}

?>