<?php

include("conexion.php");

$correo_electronico = $_POST['correo_electronico'];
$password = $_POST['password'];

$sql = "SELECT * FROM administradores WHERE correo_electronico = '$correo_electronico' AND password = '$password'";

$consulta = mysqli_query($conexion, $sql);

$existe = mysqli_num_rows($consulta);

$nombre;
$apellido;

if ($existe == 1) {
	session_start();

	while ($registro = mysqli_fetch_row($consulta)) {
		$contador = 0;
		while ($contador < 5) {
			if ($contador == 1) {
				$nombre = $registro[$contador];
			}
			if ($contador == 2) {
				$apellido = $registro[$contador];
			}
			$contador++;
		}
	}


	setcookie("NOMBRE", $nombre);
	setcookie("APELLIDO", $apellido);
	$_SESSION['usuario'] = "CiHeich";
	header("location:chequear.php");

} else {
	header("location:../../index.php?mensaje=usuario%20inexistente");
}	
	
?>