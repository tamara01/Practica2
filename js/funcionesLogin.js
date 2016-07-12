function validarLogin(){
	var parametroMail;
	var parametroClave;
	var parametroRecordarme = $("#recordarme").is(':checked');
	parametroMail =$("#correo").val();
	parametroClave =$("#clave").val();
	
	var funcionAjax=$.ajax({
		url:"php/validarLogin.php",
		type:"post",
		data:{usuario:parametroMail, clave:parametroClave, recordarme:parametroRecordarme}
	});

	funcionAjax.done(function(retorno){
		if(retorno != "Sin usuario")
		{
			//alert(retorno);
			$(".MiBoton").attr("id", "LogOut");//cambio el atributo a logOut
			$("#LogOut").html("Logout");//Lo cambio visualmente
			$("#usuario").val(retorno);//Pongo el nombre del usuario en el identificador, que me traje de ValidarLogin.php
			$("#LogOut").click(function(){
				LogOut();				//Asocio al evento click la funcion de logOut
			})
			//Mostrar('mostrarProductos');
			$("#principal").html(""); //lo pongo vacio al ID principal.
		}
		else
		{
			alert("El usuario o password es incorrecto!");
		}	
	});
	funcionAjax.fail(function(retorno){
		$("#principal").html(":( " + retorno);	
	});
}

function LogOut()
{
	var funcionAjax=$.ajax({
		url:"php/desloguearse.php",
		type:"post"
	});

	funcionAjax.done(function(retorno){
		$(".MiBoton").attr("id", "LogIn");
		$("#LogIn").html("Login");
		$("#usuario").val("Sin usuario");
		Mostrar("MostrarLogin");
	});
}


function Admin(){
	var parametroMail;
	var parametroClave;
	var parametroRecordarme = $("#recordarme").is(':checked');
	parametroMail = "admin@admin.com";
	parametroClave = "1234";
	var funcionAjax=$.ajax({
		url:"php/validarLogin.php",
		type:"post",
		data:{usuario:parametroMail, clave:parametroClave, recordarme:parametroRecordarme}
	});
	funcionAjax.done(function(retorno){
		if(retorno != "Sin usuario")
		{
			alert(retorno);
			$(".MiBoton").attr("id", "LogOut");//cambio el atributo a logOut
			$("#LogOut").html("Logout");//Lo cambio visualmente
			$("#usuario").val(retorno);//Pongo el nombre del usuario en el identificador, que me traje de ValidarLogin.php
			$("#LogOut").click(function(){
				LogOut();				//Asocio al evento click la funcion de logOut
			})
			//Mostrar('mostrarProductos');
			$("#principal").html(""); //lo pongo vacio al ID principal.
		}
		else
		{
			alert("El usuario o password es incorrecto!");
		}	
	});
	funcionAjax.fail(function(retorno){
		$("#principal").html(":( " + retorno);	
	});
}

function Comprador(){
	var parametroMail;
	var parametroClave;
	var parametroRecordarme = $("#recordarme").is(':checked');
	parametroMail = "comp@comp.com";
	parametroClave = "1234";
	var funcionAjax=$.ajax({
		url:"php/validarLogin.php",
		type:"post",
		data:{usuario:parametroMail, clave:parametroClave, recordarme:parametroRecordarme}
	});
	funcionAjax.done(function(retorno){
		if(retorno != "Sin usuario")
		{
			alert(retorno);
			$(".MiBoton").attr("id", "LogOut");//cambio el atributo a logOut
			$("#LogOut").html("Logout");//Lo cambio visualmente
			$("#usuario").val(retorno);//Pongo el nombre del usuario en el identificador, que me traje de ValidarLogin.php
			$("#LogOut").click(function(){
				LogOut();				//Asocio al evento click la funcion de logOut
			})
			//Mostrar('mostrarProductos');
			$("#principal").html(""); //lo pongo vacio al ID principal.
		}
		else
		{
			alert("El usuario o password es incorrecto!");
		}	
	});
	funcionAjax.fail(function(retorno){
		$("#principal").html(":( " + retorno);	
	});
}

function Vendedor(){
	var parametroMail;
	var parametroClave;
	var parametroRecordarme = $("#recordarme").is(':checked');
	parametroMail = "vend@vend.com";
	parametroClave = "1234";
	var funcionAjax=$.ajax({
		url:"php/validarLogin.php",
		type:"post",
		data:{usuario:parametroMail, clave:parametroClave, recordarme:parametroRecordarme}
	});
	funcionAjax.done(function(retorno){
		if(retorno != "Sin usuario")
		{
			alert(retorno);
			$(".MiBoton").attr("id", "LogOut");//cambio el atributo a logOut
			$("#LogOut").html("Logout");//Lo cambio visualmente
			$("#usuario").val(retorno);//Pongo el nombre del usuario en el identificador, que me traje de ValidarLogin.php
			$("#LogOut").click(function(){
				LogOut();				//Asocio al evento click la funcion de logOut
			})
			//Mostrar('mostrarProductos');
			$("#principal").html(""); //lo pongo vacio al ID principal.
		}
		else
		{
			alert("El usuario o password es incorrecto!");
		}	
	});
	funcionAjax.fail(function(retorno){
		$("#principal").html(":( " + retorno);	
	});
}