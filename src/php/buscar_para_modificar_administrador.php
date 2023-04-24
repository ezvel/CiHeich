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
	<nav class="header__nav">
		<ul>
			<li class="nav__item azul-bg height-50px"><a href="./administradores.php">VER</a></li>
			<li class="nav__item yellow-bg height-50px"><a href="./buscar_para_modificar_administrador.php">MODIFICAR</a></li>
			<li class="nav__item rojo-bg height-50px"><a href="./buscar_para_eliminar_administrador.php">ELIMINAR</a></li>
		</ul>
	</nav>
	<main>
		<h2>Modificar administrador</h2>
	</main>
</body>
</html>