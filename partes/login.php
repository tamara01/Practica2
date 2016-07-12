<?php 
session_start();
if(!isset($_SESSION["usuario"])) //si no está logueado
{
    if(isset($_COOKIE["usuarioCookie"]))
    {
        $arrayUsuario = json_decode($_COOKIE["usuarioCookie"], true);
    }
?>
<div class="formIngreso animated bounceIn">
	<div>
		<img src="img/avatar2.png" class="img-responsive" id="avatar">
	</div><br>
	<form id="login" class="login" onsubmit="validarLogin();return false;">
		<div class="form-group">
			<label>Correo</label>
			<input type="email" class="form-control" name="correo" id="correo"  placeholder="Correo" required="required" autofocus="autofocus" value="<?php if(isset($arrayUsuario)){echo $arrayUsuario['correo'];} ?>">
		</div>
		<div class="form-group">
			<label>Contraseña</label>
			<input type="password" class="form-control" name="clave" id="clave" minlength="4" placeholder="Contraseña" required="required" value="<?php if(isset($arrayUsuario)){echo $arrayUsuario['clave'];} ?>"> 
		</div>
		<div class="form-group">
			<label>
				<input class="" id="recordarme" type="checkbox" checked> Recuerdame
			</label>
		</div>
		<input type="submit" id="logIn" class="btn btn-block btn-success" value="enviar">

	</form>
</div>
<?php
}
// else
// {
//     echo "<button id='logOut' class='btn btn-lg btn-danger btn-block' onclick='LogOut()'>Desloguearse</button><br>";
// }
?>