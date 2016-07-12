<?php 
	session_start();
	require_once("../clases/AccesoDatos.php");
	require_once("../clases/usuario.php");

	$user = $_POST["usuario"];
	$clave = $_POST["clave"];
	$recordar = $_POST["recordarme"];

	$usuarioBuscado = Usuario::TraerUnUsuarioPorDatos($user,$clave);

	if($usuarioBuscado)
	{

		$_SESSION["id"] = $usuarioBuscado->id;
		$_SESSION["nombre"] = $usuarioBuscado->nombre;
		$_SESSION["usuario"] = $usuarioBuscado->correo; //con este veo si está logueado
		$_SESSION["tipo"] = $usuarioBuscado->tipo;		//me traigo el tipo para preguntar y dar permisos en las grillas

		$seLogueo = $usuarioBuscado->nombre;  // RETORNO EL NOMBRE 	

		if($recordar=="true") // IMPORTANTE!	es para decir cuánto va a durar la sesión
		{
			setcookie("usuarioCookie", json_encode($usuarioBuscado), time()+60, '/');
		}
		else
		{
			unset($_COOKIE["usuarioCookie"]);
			setcookie("usuarioCookie", "", time()-60, '/');
		}
	}
	else
	{
		$seLogueo = "Sin usuario";
	}

	echo $seLogueo;	
 ?>