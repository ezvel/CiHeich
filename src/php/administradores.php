<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../../public/css/estilos-dist.css">
</head>
<body>
	<header>
		<div class="header__nombre-usuario">
			<?php
			error_reporting(0);
			echo "<p class='verde'>" . $_COOKIE['NOMBRE'] . " " . $_COOKIE['APELLIDO'] . "</p>";
			?>
			<p>
				<a href="./cerrar_sesion.php">Cerrar sesión</a>
			</p>
		</div>
		<div class="header__titular">
			<h1>CiHeich</h1>
		</div>
		<nav class="header__nav">
			<ul>
				<li class="nav__item nav__item-par--bg-darkest"><a href="./inscripcion.php">INSCRIPCION</a></li>
				<li class="nav__item nav__item-impar--bg-lightness"><a href="./participantes.php">PARTICIPANTES</a></li>
				<li class="nav__item nav__item-par--bg-darkest"><a href="./administradores.php">SECCION ADMINISTRACION</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<h2>Sección administración</h2>
		<?php

		include("conexion.php");

		$sql = "SELECT id_administrador, nombre, apellido, correo_electronico FROM administradores";

		$consulta = mysqli_query($conexion, $sql);


		echo "<table class='tabla_ver_administradores'>";
		echo "<tr><td class='negrita'>Numero</td><td class='negrita'>Nombre</td><td class='negrita'>Apellido</td><td class='negrita'>Correo electronico</td></tr>";
		$contador = 0;
		while ($registro = mysqli_fetch_row($consulta)) {
			if ($contador % 2 == 0) {
				echo "<tr class='par'>";
				foreach($registro as $dato) {
					echo "<td>$dato</td>";
				}
				echo "</tr>";
			} else {
				echo "<tr class='impar'>";
				foreach($registro as $dato) {
					echo "<td>$dato</td>";
				}
				echo "</tr>";
			}

			$contador++;
		}

		echo "</table>";

		?>
	</main>
</body>
</html>