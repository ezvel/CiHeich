<?php

$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$telefono = $_GET['telefono'];

setcookie("NOMBRE_PARTICIPANTE", $nombre);
setcookie("APELLIDO_PARTICIPANTE", $apellido);
setcookie("TELEFONO_PARTICIPANTE", $telefono);


header("location:inscripcion.php?creo_cookie=1");

?>