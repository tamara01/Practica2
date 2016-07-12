function Mostrar(queMostrar)
{
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:queMostrar}
	});

	funcionAjax.done(function(retorno){
	//	$("#principal").removeClass("contenido");
	//	$("#principal").addClass("principal");
		$("#principal").html(retorno);
		//console.log(retorno);
	});

	funcionAjax.fail(function(retorno){
		$("#principal").html(":(" + retorno);	
	});
}

function borrarCookie(){
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"BorrarCookie"}
	});

	funcionAjax.done(function(retorno){
	alert("cookie borrada");
	});

	funcionAjax.fail(function(retorno){
		$("#principal").html(":(" + retorno);	
	});
}