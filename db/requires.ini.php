<?php

if (!defined('PATH_SEPARATOR')) {
    if (defined('DIRECTORY_SEPARATOR') && DIRECTORY_SEPARATOR == "\\") {
        define('PATH_SEPARATOR', ';');
    } else {
        define('PATH_SEPARATOR', ':');
    }
}

global $prefijo;

require("./".$prefijo."db/DBO.php");
require("./".$prefijo."db/db.cdCargo.php");
require("./".$prefijo."db/db.cdDepartamento.php");
require("./".$prefijo."db/db.cdMunicipio.php");
require("./".$prefijo."db/db.cdNivelEducacion.php");
require("./".$prefijo."db/db.cdOcupacion.php");
require("./".$prefijo."db/db.cdPais.php");
require("./".$prefijo."db/db.cdTema.php");
require("./".$prefijo."db/db.cdTermino.php");
require("./".$prefijo."db/db.cdUsuario.php");
require("./".$prefijo."db/db.cdUsuarioXTema.php");
require("./".$prefijo."db/db.cdUsuarioXTermino.php");

require($prefijo."class/class.registro_step1_precandidato.php");
require($prefijo."class/class.registro_step2_precandidato.php");
require($prefijo."class/class.registroForm.php");

require("./../".$prefijo."Smarty/libs/Smarty.class.php");


$include_path=ini_get("include_path");
@ini_set("include_path", $include_path.PATH_SEPARATOR.$_SERVER["DOCUMENT_ROOT"]."/Smarty");
//require("libs/smarty.class.php"); 

$smarty = new Smarty();

$smarty->compile_check = true;
$smarty->left_delimiter = '{#';
$smarty->right_delimiter = '#}';


function printVar($variable,$title=""){
	echo "<pre>";
	var_dump($variable);
	echo "</pre>";
}
?>