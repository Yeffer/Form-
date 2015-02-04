<?php
	
	require("db/requires.ini.php");

	$varCtrl=$_REQUEST['varCtrl'];
		
	switch ($varCtrl) {
		case '1':
			# Consulta de cdUsuario
			$usuarioClass= new cd_usuario();
			$cdUsuario=$usuarioClass->ConsultaUsuario();
			$smarty->assign("cdUsuario",$cdUsuario);
			$smarty->display("registroForm.html");
		break;

	}
	$smarty->display("registro_step2_precandidato.php");

		
?>