<?php

class CdUsuario{

	/*Funcion consulta de lo usuarios */
	function consultaUsuario(){

		$cdUsuario = DB_DataObject::Factory('CdUsuario');
		$campos=$cdUsuario->table();
		$cdUsuario->find();

		$cont=0;	
		while ($cdUsuario->fetch()) {
			foreach ($campos as $key => $value) {
			# Igualo los valores de la tabla a un objeto
				$ret[$cont]->$key=$cdUsuario->key;
			}
			$cont++;
		}
		return $ret;
	}	
	function crearUsuario(){
		$cdUsuario = DB_DataObject::Factory('CdUsuario');
		$campos=$cdUsuario->table();

		foreach ($campos as $key => $value) {
			# code...
			$cdUsuario->$key=$this->key;
		}
		$cdUsuario->find();
		if(!$cdUsuario->fetch()){
			$cdUsuario->fecha=date("y-m-d H:i:s");
			$cdUsuario->insert();
			$ret=1;
		}else {
			$ret=0;
		}
		return $ret;
	}
}
?>