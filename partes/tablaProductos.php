<?php 
session_start();
if(isset($_SESSION["usuario"])){ //si se logueo
	require_once("clases/AccesoDatos.php"); 
	require_once("clases/usuario.php");
	require_once("clases/producto.php");
	$arrayProducto =producto::TraerTodosLosProductos();

	?>
	<div class="page-header">
		<h2>Tabla de Productos</h2>
	</div>

	<?php 
		if($_SESSION["tipo"] == "vendedor" || $_SESSION["tipo"] == "admin"){	//SI ES ADMIN MUESTRO EL BOTON AGREGAR
			?>
				<button id="botonAgregar" onclick="Mostrar('MostrarFormAlta')" class="btn btn-success">Agregar</button><br><br>
			<?php
		}
	?>

	<div class="container">
		<!--<button id="botonAgregar" class="btn btn-success"><span class="glyphicon glyphicon-plus-sign">&nbsp;</span>Agregar</button><hr><br>-->
		<table id="tablaGrilla" class="table table-bordered table-hover table-condensed">
			<tr class="success">
				<th>Nombre</th>
				<th>Porcentaje</th>
			<?php 
			if($_SESSION["tipo"] == "vendedor" || $_SESSION['tipo']=='admin'){	
				?>
				<th>Modificar</th>
				<th>Borrar</th>
				<?php
			}
			?>
			</tr>
		<?php 
		foreach ($arrayProducto as $key => $produc) {
			if ($_SESSION['tipo']=='vendedor' || $_SESSION['tipo']=='admin') {
				echo "
				<tr>
				<td> $produc->nombre</td>
				<td> $produc->porcentaje</td>
				<td><a class='btn btn-sm btn-warning' onclick='Modificar($produc->id)'>Modificar</a></td>
				<td><a class='btn btn-sm btn-danger' onclick='borrarProducto($produc->id)'>Borrar</a></td>
				</tr>
				";
			}
			else{
				echo"
				<tr>
				<td> $produc->nombre</td>
				<td> $produc->porcentaje</td>
				</tr>
				";
			}
		}
		?>			
			
		</table>
	</div>
<?php

 	}
 	else{
  	 	echo "<p class='cartelRestriccion animated flash'> No está Logueado! Por favor inicie sesión...</p>";
    }
?>










