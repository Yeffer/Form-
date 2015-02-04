<?php
	
	require("db/requires.ini.php");


	$smarty->assign('educacion', array(
            1001 => 'Nivel Técnico Profesional (relativo a programas Técnicos Profesionales).',
            1002 => 'Nivel Tecnológico (relativo a programas tecnológicos).',
            1003 => 'Nivel Profesional (relativo a programas profesionales universitarios).',)
            );
	$smarty->assign('educacion_id', 1003);




	$varCtrl=$_REQUEST['varCtrl'];
		
	switch ($varCtrl) {
		case '1':
			# Consulta de cdUsuario
			$usuarioClass= new cd_usuario();
			$cdUsuario=$usuarioClass->ConsultaUsuario();
			$smarty->assign("cdUsuario",$cdUsuario);
			$smarty->display("registroForm.html");
		break;
		case '2':
			# Inserta cdUsuario
			$UsuarioClass= new cd_usuario();
			foreach ($_POST as $key => $value) {
				# code...
				$UsuarioClass->$key=$_POST[$key];
			}
			$InsertaUsu=$UsuarioClass->crearUsuario();
			if($InsertaUsu){
				$mensaje="Registro Guardado exitosamente";
			}else{
				$mensaje="No se guardar el usuario";
			}
			$smarty->display("registro_step2_precandidato.html");
		break;
	
		/*default:
			# Consulta de las marcas y los asigno a el template
			$UsuarioClass= new Usuario();
			$marcas=$UsuarioClass->ConsultaUsuario();
			$smarty->assign("cdUsuario",$cdUsuario);
			$smarty->display("registroForm.html");
		break;*/
	}

		$smarty->display("registro_step2_precandidato.php");
?>