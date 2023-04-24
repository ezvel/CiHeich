<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./public/css/estilos-dist.css">
</head>
<body>
	<main class="minheigh-100vh">
		<table class="tabla_usuario">
			<thead>
				<tr><th><a href="./index.php">Iniciar sesion</a></th></tr>
				<tr><th><a href="./registrar.php">Registrarse</a></th></tr>
			</thead>
			<div class="mb-40px">
			</div>
			<tbody>
				<form action="./src/php/cargar_administrador.php" method="post">
					<tr><td>Nombre</td></tr>
					<tr><td><input class="mb-20px" type="text" name="nombre"></td></tr>
					<tr><td>Apellido</td></tr>
					<tr><td><input class="mb-20px" type="text" name="apellido"></td></tr>
					<tr><td>Correo electronico</td></tr>
					<tr><td><input class="mb-20px" type="email" name="correo_electronico"></td></tr>
					<tr><td>Contrasena</td></tr>
					<tr><td><input class="mb-40px" type="password" name="password"></td></tr>
					<tr><td><input type="submit" value="Registrarse"></td></tr>
				</form>
			</tbody>
		</table>
		<!--ventana modal-->
		<article class="modal-exito">
			<div class="modal__header">
				<p>Mensaje</p>
			</div>
			<div class="modal__body">
				<p>
					¡¡¡El administrador se ha registrado exitosamente!!!
				</p>
				<div>
					<img src="./imagenes/msj_exitoso.svg">
				</div>
			</div>
			<div class="modal__footer">
				<button class="cerrar-exito">Cerrar</button>
			</div>
		</article>

		<?php


		$esta_insertado = $_GET['esta_insertado'];

		if ($esta_insertado == 1) {
			echo "<script src='./src/javascript/modal_exito.js'></script>";
		}

		?>
	</main>		
</body>
</html>