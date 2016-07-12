<div class="formIngreso animated bounceIn">
	<form id="formRegistro" method="post" onsubmit="AltaUsuario();return false;" enctype="multipart/form-data">
		<h2>Contacto</h2>
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

		<!-- <div class="form-group">
			<label for="clave2">Repetir clave</label>
			<input class="form-control" id="clave2" name="clave2" type="password" required="required" placeholder="Repita la Clave" >
		</div> -->

		<!--tengo que poner name="" igual al id porque sino aparece este error: -->
		<!--<b>Notice</b>:  Undefined index: foto in <b>C:\xampp\htdocs\practicaRecuperatorio\nexo.php</b> on line <b>79</b><br />-->

		<!-- <div class="form-group">
			<label for="option">Elige una Opción</label>
			<select class="form-control" name="" id="option">
				<option value="">Opción 1</option>
				<option value="">Opción 2</option>
				<option value="">Opción 3</option>
				<option value="">Opción 4</option>
			</select>
		</div> 

		<div class="form-group">
			<label for="foto">Elegir una foto</label>
			<input type="file" id="foto" name="foto">
			<h5 class="help-block">Máximo 50MB</h5>
		</div>
	-->
		<input type="hidden" readonly id="idParametro" name="idParametro" class="form-control" value="0"> <!-- IMPORTANTE -->

		<button id="botonRegistro" type="submit" class="btn btn-primary btn-block">Enviar</button>
		<br>
		<label>
              <a class="btn btn-primary" onclick="Mostrar('MostrarUsuarios')"> Cancelar </a>
        </label>
	</form>
</div>
