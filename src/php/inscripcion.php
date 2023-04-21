<?php
error_reporting(0);
?>
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
		<h2>Inscripcion</h2>
		<!-- Tabla para estructurar el formulario -->
		<table class="table-form">
			<!-- Formulario -->
			<form action="./crear_cookie.php" method="get">

				<!-- Nombre -->
				<tr><td class="negrita">Nombre</td></tr>
				<tr><td><input type="text" name="nombre"></td></tr>
				<!-- Apellido -->
				<tr><td class="negrita">Apellido</td></tr>
				<tr><td><input type="text" name="apellido"></td></tr>
				<!-- Teléfono -->
				<tr><td class="negrita">Teléfono</td></tr>
				<tr><td><input type="number" name="telefono"></td></tr>

				<!-- Botones del formulario -->
				<tr><td><input type="reset" value="RESETEAR" class="negrita"></td></tr>
				<tr><td><input type="submit" value="INSCRIBIR"></td></tr>
			</form>
		</table>

		<article class="modal-exito">
			<div class="modal__header">
				<p>Mensaje</p>
			</div>
			<div class="modal__body">
				<p>
					¡¡¡El participante se ha insertado exitosamente!!!
				</p>
				<div>
					<img src="../../imagenes/msj_exitoso.svg">
				</div>
			</div>
			<div class="modal__footer">
				<button class="cerrar-exito">Cerrar</button>
			</div>
		</article>
		
		<!--
		<article class="modal-error">
			<div class="modal__header">
				<p>Error</p>
			</div>
			<div class="modal__body">
				<p>
					¡¡¡No se ha podido ingresar al participante!!!
				</p>
				<div>
					<img src="../../imagenes/msj_error.svg">
				</div>
			</div>
			<div class="modal__footer">
				<button class="cerrar-error">Cerrar</button>
			</div>
		</article>-->

		<!--cookies-->
		<?php
			if ($_COOKIE['NOMBRE'] != "" && $_COOKIE['APELLIDO'] != "") {
				echo "<table cellspacing='0px' class='table-card'>";
				echo "<tr class='par'><td class='negrita'>Nombre</td><td>" . $_COOKIE['NOMBRE'] . "</td></tr>";
				echo "<tr class='impar'><td class='negrita'>Apellido</td><td>" . $_COOKIE['APELLIDO'] . "</td></tr>";
				echo "<tr class='par'><td class='negrita rojo'>Eliminar</td><td><a href='./limpiar_cookie.php'><img src='../../imagenes/trash.svg' width='30px'/></a></td></tr>";
				echo "<tr class='impar'><td class='negrita verde'>Cargar</td><td><a href='./cargar_participantes.php'><img src='../../imagenes/accept.png' width='30px'/></a></td></tr>";
				echo "</table>";
			}
	
			$esta_insertado = $_GET['esta_insertado'];
			
            if ($esta_insertado == 1) {
                echo "<script src='../javascript/modal_exito.js'></script>";
            }

            if($esta_insertado == 0) {
            	echo "<script src='../javascript/modal_error.js'></script>";
            }


		?>

	</main>
</body>
<footer>
	<div>
		<a href="https://iconscout.com/icons/trash" target="_blank">Trash Icon</a> by <a href="https://iconscout.com/contributors/benjamin-j-sperry" target="_blank">Benjamin J sperry</a>		
	</div>
	<div>
		<a href="https://iconscout.com/icons/accept" target="_blank">Accept Icon</a> by <a href="https://iconscout.com/contributors/jemismali" target="_blank">Jemis Mali</a>		
	</div>
</footer>
</html>