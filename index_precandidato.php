<?php	
	
	require("db/requires.ini.php");

	#asignar los valores correspondientes a pais

			# Consulta de las marcas y los asigno a el template
			$usuarioClass= new CdUsuario();
			$cdUsuario = $usuarioClass->ConsultaUsuario();
			$smarty->assign("cdUsuario",$cdUsuario);
			$smarty->display("index_precandidato.html");
	//$smarty->display("registroForm.html");



?>
