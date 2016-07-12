<?php 
session_start();
if(isset($_SESSION["usuario"])){
	require_once("clases/AccesoDatos.php"); 
	require_once("clases/usuario.php");
	$arrayUsuarios =usuario::TraerTodosLosUsuarios();
	//var_dump($arrayUsuarios);die();
	?>

	<?php 
		if($_SESSION["tipo"] == "admin"){
			?>
			<div class="page-header">
				<h2>Tabla de Usuarios</h2>
			</div>

			<button id="botonAgregar" onclick="Mostrar('FormAltaUsuario')" class="btn btn-success">Agregar</button><br><br>

			<div class="container">
			<table id="tablaGrilla" class="table table-bordered table-hover table-condensed">
				<tr class="success">
					<!-- <th>Foto</th> -->
					<th>Correo</th>
					<th>Nombre</th>
					<th>Clave</th>
					<th>Tipo</th>
								
					<th>Modificar</th>
					<th>Borrar</th>
				</tr>
			<?php 											// src='fotos/".$user->foto."' />  <td><img  class='fotoGrilla' src='$user->foto'/>

			foreach ($arrayUsuarios as $key => $user) {
				echo "
					<tr>
					<td> $user->correo</td>
					<td> $user->nombre</td>
					<td> $user->clave</td>
					<td> $user->tipo</td>
					<td><a class='btn btn-sm btn-warning' onclick='ModificarUsuario($user->id)'>Modificar</a></td>
					<td><a class='btn btn-sm btn-danger' onclick='BorrarUsuario($user->id)'>Borrar</a></td>
					</tr>
				";
			}
			?>
			</table>
			</div>

		<?php
	 	}
	 	else{
	  	  echo "<p class='cartelRestriccion animated flash'> Debe ser un usuario Admin para ver esta info</p>";
    	}
}
else{
  	 	echo "<p class='cartelRestriccion animated flash'> No está Logueado! Por favor inicie sesión...</p>";
    }
?>