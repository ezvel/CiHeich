<?php

$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$telefono = $_GET['telefono'];

setcookie("NOMBRE", $nombre);
setcookie("APELLIDO", $apellido);
setcookie("TELEFONO", $telefono);

header("location:inscripcion.php");

?>