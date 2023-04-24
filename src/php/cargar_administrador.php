<?php

include("conexion.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo_electronico = $_POST['correo_electronico'];
$password = $_POST['password'];

$sql = "INSERT INTO administradores (nombre, apellido, correo_electronico, password) VALUES ('$nombre', '$apellido', '$correo_electronico', '$password')"; 

if(mysqli_query($conexion, $sql)) {
	header("location:../../registrar.php?esta_insertado=1");
} else {
	header("location:../../registrar.php?esta_insertado=0");
}

?>