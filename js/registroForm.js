$(document).ready(function(){  
  $("#guardar_ajax").on('click',function(){
   $.post( "confirmReg.php?varCtrl=2", { nombre: $("#datos_nombre").text(), apellido: $("#datos_apellido").text() })
	.done(function( data ) {
		alert( "Data Loaded: " + data );
	});
  });

});








