<?php

class CdUsuario{

	/*Funcion consulta de lo usuarios */
	function consultaUsuario(){

		$cd_usuario = DB_DataObject::Factory('cdUsuario');
		$campos=$cd_usuario->table();
		$cd_usuario->find();

		$cont=0;	
		while ($cd_usuario->fetch()) {
			foreach ($campos as $key => $value) {
			# Igualo los valores de la tabla a un objeto
				$ret[$cont]->$key=$cd_usuario->key;
			}
			$cont++;
		}
		return $ret;
	}	
	function crearUsuario(){
		
		$cd_usuario = DB_DataObject::Factory('cdUsuario');
		$campos=$cd_usuario->table();		
		
		foreach ($campos as $key => $value) {
# code...
			$cd_usuario->$key = $this->$key;
		}

		$cd_usuario->find();
		
		if(!$cd_usuario->fetch()){

			$cd_usuario->fecha=date("y-m-d H:i:s");
			$cd_usuario->insert();
			$ret=1;
		}else {
			$ret=0;
		}
		return $ret;
	}
}
?>