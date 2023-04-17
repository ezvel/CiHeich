<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./estilos.css">
</head>
<body>
	<header>
		<div class="header__titular">
			<h1>CAMPEONATO DE CHINCHON</h1>
		</div>
		<nav class="header__nav">
			<ul>
				<li class="nav__item nav__item-par--bg-darkest"><a href="./inscripcion.html">INSCRIPCION</a></li>
				<li class="nav__item nav__item-impar--bg-lightness"><a href="./participantes.php">PARTICIPANTES</a></li>
				<li class="nav__item nav__item-par--bg-darkest"><a href="./partidas.php">PARTIDAS</a></li>
				<li class="nav__item nav__item-impar--bg-lightness"><a href="./posiciones.php">POSICIONES</a></li>
				<li class="nav__item nav__item-par--bg-darkest"><a href="./seccion_administradores.php">SECCION ADMINISTRACION</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<h2>Inscripcion</h2>
		<!-- Tabla para estructurar el formulario -->
		<table class="table-form">
			<!-- Formulario -->
			<form action="./cargar_participantes.php" method="get">

				<!-- Nombre -->
				<tr><td class="negrita">Nombre</td></tr>
				<tr><td><input type="text" name="nombre"></td></tr>
				<!-- Apellido -->
				<tr><td class="negrita">Apellido</td></tr>
				<tr><td><input type="text" name="apellido"></td></tr>

				<!-- Botones del formulario -->
				<tr><td><input type="reset" value="RESETEAR" class="negrita"></td></tr>
				<tr><td><input type="submit" value="INSCRIBIR"></td></tr>
			</form>
		</table>

		<!--cookies-->
		<?php
			echo "<table cellspacing='0px' class='table-card'>";
			echo "<tr class='tr-par'><td class='negrita'>Nombre</td><td>" . $_COOKIE['NOMBRE'] . "</td></tr>";
			echo "<tr class='tr-impar'><td class='negrita'>Apellido</td><td>" . $_COOKIE['APELLIDO'] . "</td></tr>";
			echo "<tr class='tr-par'><td class='negrita rojo'>Eliminar</td><td><a href='#'><img src='./trash.svg' width='30px'/></a></td></tr>";
			echo "<tr class='tr-impar'><td class='negrita verde'>Cargar</td><td><a href='#'><img src='./accept.png' width='30px'/></a></td></tr>";
			echo "</table>";
			echo "<i class='fa-solid fa-trash'></i>";
			//<a href="https://iconscout.com/icons/trash" target="_blank">Trash Icon</a> by <a href="https://iconscout.com/contributors/benjamin-j-sperry" target="_blank">Benjamin J sperry</a>
			//<a href="https://iconscout.com/icons/accept" target="_blank">Accept Icon</a> by <a href="https://iconscout.com/contributors/jemismali" target="_blank">Jemis Mali</a>
		?>

	</main>
</body>
</html>