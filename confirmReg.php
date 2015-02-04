<?php
	require("db/requires.ini.php");
	$varCtrl=$_REQUEST['varCtrl'];
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
			var_dump($_POST);
		break;
		default:
			//var_dump("hola");
		break;
	}