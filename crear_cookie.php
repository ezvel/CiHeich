<?php

$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];

setcookie("NOMBRE", $nombre);
setcookie("APELLIDO", $apellido);

header("location:inscripcion.php");

?>