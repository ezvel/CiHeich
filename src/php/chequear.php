<?php

session_start();

if (isset($_SESSION['usuario'])) {
	$_COOKIE['NOMBRE'];
	$_COOKIE['APELLIDO'];
	header("location:inscripcion.php");
} /*else {
	header("location:../../index.php?mensaje=usuario%20inexistente");
}*/

?>