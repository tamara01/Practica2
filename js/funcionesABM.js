/************************************  PRODUCTO  ********************************/

function Agregar(){
	var formData = new FormData(document.getElementById('formIngreso')); // me traigo todo el formualrio html
	formData.append("queHacer", "Agregar");

	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		datatype: "html",
		data:formData, 
		cache: false,
	    contentType: false,
		processData: false,

	});
	funcionAjax.done(function(retorno){
		//alert(retorno);
		Mostrar('MostrarProductos'); //recargo para ver que se agregó correctamente
		console.log(retorno);
	});
	
	funcionAjax.fail(function(retorno){
		$("#principal").html("erroooooooooooor"+retorno);	
	});	
}

function borrarProducto(id){
	if(!confirm("¿Seguro que desea eliminar?"))
	 	return;
	//alert(id);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{	queHacer:"eliminar",
				id : id }
	});
	funcionAjax.done(function(retorno){
		Mostrar('MostrarProductos'); // RECARGA Grilla de productos
		//console.log(retorno);	
	});
	funcionAjax.fail(function(retorno){
		$("#principal").html("erroooooooooooor"+retorno);	
	});	
}

function Modificar(id) //sera que es recursiva
{
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{	queHacer:"Modificar", //me lo traigo
				id : id }
	});

	Mostrar('MostrarFormAlta'); //lo pongo aca 

	funcionAjax.done(function(retorno){
		$("#accionIngreso").html("Modificación");
		var entidad = JSON.parse(retorno);
		$("#idParametro").val(entidad.id);
		$("#nombre").val(entidad.nombre);
		$("#porcentaje").val(entidad.porcentaje);
		$("#botonAlta").html("Modificar");  //cambio todo para que quede el boton modificar y vuelve a empezar en agregar
	});
}


/************************************  USUARIO  ********************************/

function AltaUsuario()
{	
	var formData = new FormData(document.getElementById('formRegistro')); // para pasar también archivos
	formData.append("queHacer", "GuardarPersona");

	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		datatype: "html",
		data:formData, 
		cache: false,
	    contentType: false,
		processData: false,
	});

	funcionAjax.done(function(retorno){
		//alert(retorno); //me retrorno un 5
		//	alert("Cambios realizados con éxito!");	
			console.log(retorno);
			Mostrar("MostrarUsuarios");
	});
	funcionAjax.fail(function(retorno){
		$("#principal").html("erroooooooooooor"+retorno);	
	});	
}

function BorrarUsuario(id){
		if(!confirm("¿Seguro que desea eliminar?"))
	 	return;
	//alert(id);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{	queHacer:"eliminarUsuario",
				id : id }
	});
	funcionAjax.done(function(retorno){
		Mostrar('MostrarUsuarios'); // RECARGA Grilla de usuarios
	});
	funcionAjax.fail(function(retorno){
		$("#principal").html("erroooooooooooor"+retorno);	
	});	
}

function ModificarUsuario(id) //sera que es recursiva
{
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{	queHacer:"ModificarUsuario",
				id : id }
	});

	Mostrar('FormAltaUsuario');

	funcionAjax.done(function(retorno){
		//alert(retorno);
		$("#accionModi").html("Modificación");
		var entidad = JSON.parse(retorno);
		$("#idParametro").val(entidad.id);
		$("#name").val(entidad.nombre);
		$("#correo").val(entidad.correo);
		$("#clave1").val(entidad.clave);
		$("#botonRegistro").html("Modificar");  //cambio todo para que quede el boton modificar y vuelve a empezar en agregar
		// $("#linkTabUsu").hide();
		
	});
}

/************************************  PERFIL  ********************************/

function EditarUser(id)
{
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{	queHacer:"ModificarUsuario",
				id : id }
	});

	Mostrar('FormAltaUsuario');

	funcionAjax.done(function(retorno){
		//alert(retorno);
		$("#accionModi").html("Modificar perfil");
		var entidad = JSON.parse(retorno);
		$("#idParametro").val(entidad.id);
		$("#name").val(entidad.nombre);
		$("#correo").val(entidad.correo);
		$("#clave1").val(entidad.clave);
		$("#botonRegistro").html("Modificar");  //cambio todo para que quede el boton modificar y vuelve a empezar en agregar
		
		//$("#linkTabUsu").hide();
	});
}

