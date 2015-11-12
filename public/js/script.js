$("#registro").click(function(){
	var dato=$("#genre").val();
	var route="http://localhost:8000/genero";
	var token=$("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type:'POST',
		dataType:'json',
		data:{genro:dato},

		success:function(){
			$("#msj-success").fadeIn();
		},
		error:function(msj){
			//console.log(msj.responseJSON.genro);
			$("#msj").html(msj.responseJSON.genro);
			$("#msj-error").fadeIn();
		}
	});
});