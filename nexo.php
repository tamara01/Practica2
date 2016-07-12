<?php 
require_once("clases/AccesoDatos.php");
require_once("clases/usuario.php");
require_once("clases/producto.php");
$queHago=$_POST['queHacer'];

switch ($queHago) {
	case "MostrarLogin":
		include("partes/login.php");
		break;
	case "MostrarProductos":
		include("partes/tablaProductos.php");
		break;
	case 'MostrarFormAlta':
		include("partes/altaProducto.php");
		break;
	case 'MostrarUsuarios':
		include("partes/tablaUsuarios.php");
		break;
	case 'FormAltaUsuario':
		include("partes/altaPersona.php");
		break;
	case 'MostrarPerfil':
		include("partes/perfil.php");
		break;
	
	//--------------------ABM PRODUCTO--------------------//

	case "Agregar":
			$unProducto = new producto();
			$unProducto->nombre = $_POST["nombre"];
			$unProducto->porcentaje = $_POST["porcentaje"];

			if($_POST["id"] == "0") // AGREGAR
			{
				$idInsertado = $unProducto->InsertarProducto();
				echo $idInsertado;
			}
			else   // MODIFICAR
			{
				$unProducto->id = $_POST["id"];
				echo $unProducto->ModificarProducto();
			}
			break;
	case "Modificar":
			$unProducto = producto::TraerUnProducto($_POST["id"]);
			echo json_encode($unProducto);
			break;

	case 'eliminar':
		$unProducto = new producto();
		$unProducto->id = $_POST['id'];
		$unProducto->BorrarProducto();
		break;

	case 'editar':
		$user = new producto();
		$user->nombre = $_POST['nombre'];
		$user->porcentaje = $_POST['password'];
		$user->id = $_POST['id'];
		$user->ModificarProducto();
		break;
	//--------------------ABM USUARIO--------------------//
	case "GuardarPersona":
		// include("partes/altaPersona.php");
		// echo $cantidad; //me retorna el ultimo ok19
		// break;
			$usuario = new usuario();
			$usuario->nombre = $_POST["name"];
			$usuario->correo = $_POST["correo"];
			$usuario->clave = $_POST["clave1"];
			$usuario->tipo = "comprador";   //puedo poner usuario,comprador,vendedot,etc
			$usuario->foto = "fotos/".$usuario->nombre.".jpg";

			if($_POST["id"] == "0") // AGREGAR
			{
				$idInsertado = $usuario->InsertarUsuario();
				echo $idInsertado;
			}
			else   // MODIFICAR
			{
				$usuario->id = $_POST["id"];
				echo $usuario->ModificarUsuario();
			}

			 move_uploaded_file($_FILES["foto"]["tmp_name"], $usuario->foto);
			break;
	case 'eliminarUsuario':
		$user = new usuario();
		$user->id = $_POST['id'];
		$user->BorrarUsuario();
		break;

	case "ModificarUsuario":
			$unProducto = usuario::TraerUsuario($_POST["id"]);
			//var_dump($unProducto);
			echo json_encode($unProducto);
			break;
	case 'BorrarCookie':
		setcookie("usuarioCookie", "", time()-60, '/');
		break;

}//fin switch
	

?>