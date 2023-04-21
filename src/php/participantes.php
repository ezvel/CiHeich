<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
	<header>
		<div class="header__titular">
			<h1>CAMPEONATO DE CHINCHON</h1>
		</div>
		<nav class="header__nav">
			<ul>
				<li class="nav__item nav__item-par--bg-darkest"><a href="./inscripcion.php">INSCRIPCION</a></li>
				<li class="nav__item nav__item-impar--bg-lightness"><a href="./participantes.php">PARTICIPANTES</a></li>
				<li class="nav__item nav__item-par--bg-darkest"><a href="./partidas.php">PARTIDAS</a></li>
				<li class="nav__item nav__item-impar--bg-lightness"><a href="./posiciones.php">POSICIONES</a></li>
				<li class="nav__item nav__item-par--bg-darkest"><a href="./seccion_administradores.php">SECCION ADMINISTRACION</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<h2>Participantes</h2>
		<?php

		include("conexion.php");

		$sql = "SELECT nro_participante, nombre, apellido, telefono FROM participantes";

		$consulta = mysqli_query($conexion, $sql);


		echo "<table class='tabla_ver_participantes'>";
		echo "<tr><td>Numero</td><td>Nombre</td><td>Apellido</td><td>Telefono</td></tr>";
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