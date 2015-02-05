$(document).ready(function(){  
    $("#guardar_ajax").on('click',function() {
      $.ajax({
        url: "confirmReg.php?varCtrl=2",
        type: "post",   
        data:{
            nombre: $("#datos_nombre").text(),
            apellido: $("#datos_apellido").text(),
            cedula: $("#datos_cedula").text(),
            genero: $("#datos_genero").text(),
            fechaNacimiento: $("#datos_fecha").text(),
            email: $("#datos_mail").text(),
            celular: $("#datos_celular").text(),
            telefono: $("#datos_telefono").text(),
            idPais: $("#datos_pais").text(),
            idDepartamento: $("#datos_departamento").text(),
            idMunicipio: $("#datos_municipio").text(),
            direccion: $("#datos_direccion").text(),
            idOcupacion: $("#datos_ocupacion").text(),
            tipoLugar: $("#datos_votacion").text(),
            idTema: $("#datos_temas").text()
            }
        }).done(function( datos ){
               // window.location.assign("confirmReg.php")
               console.log(datos);
        });
        
    });
});
    