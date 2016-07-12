
<div class="formIngreso animated bounceIn">
	<form id="formRegistro" method="post" onsubmit="AltaUsuario();return false;">
		<h2 id="accionModi">Contacto</h2>
		<div class="form-group">
			<label for="correo">Correo</label>
			<input class="form-control" id="correo" name="correo" type="email" placeholder="Correo" required="required" autofocus="autofocus" >
		</div>
		<div class="form-group">
			<label for="name">Nombre</label>
			<input class="form-control" id="name" name="name" type="text" required="required" placeholder="Nombre" >
		</div>
		<div class="form-group">
			<label for="clave1">Clave</label>
			<input class="form-control" id="clave1" name="clave1" type="password" required="required" placeholder="Clave" >
		</div>



		<input type="file" id="foto" name="foto" style="display:none;">
       
        <input type="button" class="form-ingreso" value="Elegir foto de perfil" title="Se actualizará luego de guardar" id="foton" onclick="document.getElementById('foto').click();" style="">
        
        <img id="fotoRegistro" class="fotoRegistro" src="img/perfilPordefecto.jpg">




		<input type="hidden" readonly id="idParametro" name="id" class="form-control" value="0"> <!-- IMPORTANTE -->

		<button id="botonRegistro" type="submit" class="btn btn-primary btn-block">Enviar</button>
		<br>

		<label>
              <a class="btn btn-warning" onclick="Mostrar('MostrarUsuarios')"> Cancelar </a>
        </label>

	</form>
</div>

