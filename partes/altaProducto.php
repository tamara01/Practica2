<div class="formIngreso animated slideInUp"><br>

    <form id="formIngreso" class="form-ingreso " onsubmit="Agregar();return false;" method="post">
        <h2 id="accionIngreso" class="form-ingreso-heading"> Alta</h2>

        <div class="form-group">
        <label for="nombre" class="sr-only"> Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" required=""  class="form-control" autofocus="autofocus"><br>
        </div>

        <div class="form-group">
        <label for="porcentaje" class="sr-only"> Porcentaje</label>
            <input type="number" id="porcentaje" name="porcentaje" class="form-control" placeholder="Porcentaje" min="1" max="99" required="required"><br>
        </div>
        <!--  HACER UN AGREGAR PERSONA U OTRA COSA CON RADIO,CHECKBOX,ETC
        <label for="sexo">Sexo</label>
	        <input type="radio" id="sexoM" name="sexo" value="M">M
	        <input type="radio" id="sexoF" name="sexo" value="F">F<br><br>
        -->
        <!-- <input type="file" id="foto" name="foto" style="display:none;">
        <input type="button" class="form-ingreso" value="Elegir foto de perfil" title="Se actualizará luego de guardar" id="foton" onclick="document.getElementById('foto').click();" style="">
        <img id="fotoRegistro" class="fotoRegistro" src="img/perfilPordefecto.jpg"> -->

        <input type="hidden" readonly id="idParametro" name="id" class="form-control" value="0"> <!-- IMPORTANTE -->

        <br><br><button id="botonAlta" type="submit" class="btn btn-lg btn-success btn-block">Agregar</button><br>
        <label>
              <a class="btn btn-primary" onclick="Mostrar('MostrarProductos')"> Cancelar </a>
        </label>
    </form>
</div>