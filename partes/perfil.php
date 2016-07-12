<?php 
session_start();
if(isset($_SESSION["usuario"]))
{
	require_once("clases/AccesoDatos.php");
	require_once("clases/usuario.php");

	$unUsuario = usuario::TraerUnUsuarioPorId($_SESSION["id"]);

			echo "<img id='perfil' class='fotoPerfil animated pulse' src='$unUsuario->foto'>";
 	?>
	<div class="page-header">
		<h2>Mi Perfil</h2>
	</div>
	<div class="container">
		<table id="tablaPerfil" class="table table-bordered table-hover table-condensed">
	 		<tbody>

	 			<?php
				echo "<tr><td><strong>Nombre</strong></td><td>$unUsuario->nombre</td></tr>
					  <tr><td><strong>Email</strong></td><td>$unUsuario->correo</td></tr>
					  <tr><td><strong>Clave</strong></td><td>$unUsuario->clave</td></tr>
					  <tr><td><strong>Tipo</strong></td><td>$unUsuario->tipo</td></tr>";
	 			 ?>
	 		</tbody>
	 	</table>
	</div>
	<?php
	 	echo "<hr><a onclick='EditarUser($unUsuario->id)' class='btn btn-warning'>Editar</a>"; 
 }
 else
 {
 	echo "<p class='cartelRestriccion animated shake'>Debe iniciar sesión o registrarse para visualizar esta información</p>";
 }
 ?>