<?php	
	
	require("db/requires.ini.php");

	#asignar los valores correspondientes a pais
	$smarty->assign('pais', array(
            1000 => 'Afganistán',
            1001 => 'Albania',
            1002 => 'Alemania',
            1003 => 'Andorra',
            1004 => 'Angola',
            1005 => 'Alemania',
            1006 => 'Colombia',
           	1007 => 'Peru',
            1008 => 'Argentina',
            1009 => 'Brasil',)
            );
	$smarty->assign('selectPais', 1006);

	#asignar los valores correspondientes a departamento
	$smarty->assign('departamento', array(
						1000 =>'Cundinamarca',
						1001 =>'Boyaca',
						1002 =>'Santander',
						1003 =>'Armenia',)
						);
	$smarty->assign('selectDepartamento', 1000);


	#asignar los valores correspondientes a municipio/ciudad
	$smarty->assign('municipio', array(
						1001 =>'Bogota',
						1002 =>'Tunja',
						1003 =>'Duitama',)
						);
	$smarty->assign('selectMunicipio',1001);

	#asignar los valores correspondientes a ocupacion
	$smarty->assign('ocupacion', array(
						1001 =>'Abogado',
						1002 =>'Ingeniero',
						1003 =>'Licenciado',)
						);
	$smarty->assign('selectOcupacion',1001);



	$smarty->assign('temas_radios', array(
		         1000 => 'Seguridad',
             1001 => 'Agricultura',
             1002 => 'Economía',
             1003 => 'Salud',
             1004 => 'Infraestuctura',
             1005 => 'Educación',
             1006 => 'Política',)
						 );                            
	$smarty->assign('tema_radios', 1000);




	$varCtrl=$_REQUEST['varCtrl'];							                      		
	switch ($varCtrl) {
		case '1':
			# Consulta de cdUsuario
			$usuarioClass= new CdUsuario();
			$cdUsuario=$usuarioClass->ConsultaUsuario();
			$smarty->assign("cdUsuario",$cdUsuario);
			$smarty->display("registroForm.html");
		break;
		case '2':
			# Inserta cdUsuario
			$UsuarioClass= new CdUsuario();
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
			$smarty->display("confirmReg.html");	
		break;
	
		default:
			# Consulta de las marcas y los asigno a el template
			$usuarioClass= new CdUsuario();
			$cdUsuario = $usuarioClass->ConsultaUsuario();
			$smarty->assign("cdUsuario",$cdUsuario);
			$smarty->display("registroForm.html");
		break;
	}
		//$smarty->display("registroForm.html");



?>


