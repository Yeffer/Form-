<?php
	require("db/requires.ini.php");
	$varCtrl=$_REQUEST['varCtrl'];
	print_r($_POST['varCtrl']);
	if(isset($_POST['reconfirmar']) && ($_POST['reconfirmar']=="yes")){
		echo "esto es el if";
		print_r($_POST);
	}else{
	switch ($varCtrl) {

		case '1':
			# captura datos por post
			$datos['nombre']=$_POST['nombre'];		
			$datos['apellido']=$_POST['apellido'];	
			$datos['cedula']=$_POST['cedula'];		
			$datos['genero']=$_POST['genero'];
			$datos['dia']=$_POST['StartDateDay'];
			$datos['mes']=$_POST['StartDateMonth'];
			$datos['ano']=$_POST['StartDateYear'];
			$datos['mail']=$_POST['mail'];
			$datos['celular']=$_POST['celular'];
			$datos['telefono']=$_POST['telefono'];
			$datos['selectPais']=$_POST['selectPais'];
			$datos['selectDepartamento']=$_POST['selectDepartamento'];
			$datos['selectMunicipio']=$_POST['selectMunicipio'];
			$datos['direccion']=$_POST['direccion'];
			$datos['selectOcupacion']=$_POST['selectOcupacion'];
			$datos['lugarVotacion']=$_POST['lugarVotacion'];
			$datos['tema_radios']=$_POST['tema_radios'];
			$datos['referido']=$_POST['referido'];
			
			$smarty->assign("datos",$datos);
			$smarty->display("confirmReg.html");
			

		break;
		case '2':	
			# Inserta usuario
			$usuarioClass= new CdUsuario();

			foreach ($_POST as $key => $value) {
				# code...
				
				$usuarioClass->$key=$_POST[$key];
			}
			
			$insertaUsuario=$usuarioClass->crearUsuario();
		
			/*if($insertaUsuario){
				$msn="Registro de marca Guardado exitosamente";
			}else{
				$msn="No se guardo marca";
			}
			$smarty->assign("msn",$msn);
			$smarty->display("confirmReg.html");					
*/

			
		break;
		default:
	
			
		break;
	}
}