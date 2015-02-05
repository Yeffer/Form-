<?php
	
	include("db/requires.ini.php");

	$clase -> crearUsuario();

	$clase = new CdUsuario();
		$usuarioClass= new CdUsuario();
			foreach ($_POST as $key => $value) {
				# code...
				$usuarioClass->$key=$_POST[$key];
			}
			$insertaUsu=$usuarioClass->crearUsuario();
			if($insertaUsu){
				$mensaje="Registro Guardado exitosamente";
			}else{
				$mensaje="No se guardar el usuario";
			}

	
	

?>