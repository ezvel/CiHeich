<?php

include("conexion.php");

$nombre = $_COOKIE['NOMBRE_PARTICIPANTE'];
$apellido = $_COOKIE['APELLIDO_PARTICIPANTE'];
$telefono = $_COOKIE['TELEFONO_PARTICIPANTE'];

$sql = "INSERT INTO participantes (nombre, apellido, telefono) VALUES ('$nombre', '$apellido', '$telefono')";

$insercion_sql = mysqli_query($conexion, $sql);



if ($insercion_sql) {
	setcookie("NOMBRE_PARTICIPANTE", "");
	setcookie("APELLIDO_PARTICIPANTE", "");
	setcookie("TELEFONO_PARTICIPANTE", "");
	header("location:inscripcion.php?esta_insertado=1");
} else {
	header("location:inscripcion.php?esta_insertado=0");
}

?>