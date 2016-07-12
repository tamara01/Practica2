<html lang="es">
<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width,  initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
  	<!--Estilos css bootstrsp-->
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  	<!-- mi estilo-->
  	<link rel="stylesheet" type="text/css" href="css/estilo.css">
  	<link rel="stylesheet" type="text/css" href="css/animacion.css">
  	<link rel="icon" href="img/ProgramIcon.ico">
  	<!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  	<!--Jquery-->
  	<script src="js/jquery.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  	<!--mis referencias-->
  	<script type="text/javascript" src="js/funcionesAjax.js"></script>
  	<script type="text/javascript" src="js/funcionesLogin.js"></script>
  	<script type="text/javascript" src="js/funcionesABM.js"></script>
  	<style> body{padding-top: 60px;}</style>
	<title>ABM</title>
</head>
<body>
<!--***************************************** HEADER ***************************************************-->
	<div class="container-fluid">
		<br>
		<header>
			<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
				<div class="container-fluid">
					<!-- <a href="#" class="navbar-brand">
						Inicio
					</a> -->
					<ul class="nav navbar-nav navbar-left">
						<li><a onClick="Mostrar('MostrarProductos')" role="button">Lista de productos</a></li>
						<li><a onClick="Mostrar('MostrarUsuarios')" role="button">Lista de usuarios</a></li>
						<li><a onClick="Mostrar('MostrarPerfil')" role="button">Mi perfil</a></li>											
					</ul>
					<form id="identificador" class="navbar-form navbar-left estilotextarea">			
						<input type="text" id="usuario" title="Usuario" readonly style="color:black;"><!--Para ver el usuario en sesión-->			
					</form>	
					
					<ul class="nav navbar-nav navbar-right">

						<li><button type="submit" class="MiBoton2" onClick="borrarCookie()">borrar cookie</button></li>
						<li><button type="submit" class="MiBoton" onClick="Mostrar('MostrarLogin')" id="LogIn">Login</button></li>
						<li><button type="submit" class="MiBoton2" onClick="Comprador()">Comprador</button></li>
						<li><button type="submit" class="MiBoton2" onClick="Vendedor()">Vendedor</button></li>
						<li><button type="submit" class="MiBoton2" onClick="Admin()">Administrador</button></li>						
					</ul>
					
				</div>

			</nav>
		</header>
	</div>
<!--*********************************************** CONTENIDO *************************************************************-->
	
	<!--	<div class="jumbotron"> -->					
		
			<div id="principal" class="container">



			</div>
	<!--	</div> -->					
		

<!--**********************************************************************************************************************-->
	

</body>
</html>