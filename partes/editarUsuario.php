<?php 
	if(isset($user->correo))
	{
		$mail = $user->correo;
	}
	if(isset($user->nombre))
	{
		$nombr = $user->nombre;
	}
	if(isset($user->clave))
	{
		$pass = $user->clave;
	} 
	if(isset($user->id))
	{
		$identi = $user->id;
	}
?>
<div class="formIngreso animated bounceIn">
	<form id="formUsuario" method="post" onsubmit="ModificarUsuario(<?php echo $identi; ?>);return false;" enctype="multipart/form-data">
		<div class="form-group">
			<label for="correo">Correo</label>
			<input class="form-control" id="correo" name="correo" type="email" placeholder="Correo" required="required" autofocus="autofocus" value="<?php echo $mail;?>" >
		</div>
		<div class="form-group">
			<label for="name">Nombre</label>
			<input class="form-control" id="name" name="name" type="text" required="required" placeholder="Nombre" value="<?php echo $nombr;?>">
		</div>
		<div class="form-group">
			<label for="clave1">Clave</label>
			<input class="form-control" id="clave1" name="clave1" type="password" required="required" placeholder="Clave" value="<?php echo $pass;?>">
		</div>


		<div class="form-group">
			<label for="foto">Elegir una foto</label>
			<input type="file" id="foto" name="foto">
			<h5 class="help-block">Máximo 50MB</h5>
		</div>

		<input type="hidden" readonly id="idParametro" name="idParametro" class="form-control" value="0"> <!-- IMPORTANTE -->

		<button id="botonRegistro" type="submit" class="btn btn-primary btn-block">Enviar</button>
		<br>
		<label>
              <a class="btn btn-primary" onclick="Mostrar('MostrarUsuarios')"> Cancelar </a>
        </label>
	</form>
</div>
