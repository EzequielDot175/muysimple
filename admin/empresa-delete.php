<?php 
	require_once("class/class.empresas.php");
	if (isset($_POST["delete_empresa"])) {
		Empresa::delete($_POST["delete_empresa"]);
	}

	if (isset($_POST["delete_empresa_two"])) {
		Empresa::delete_two($_POST["delete_empresa_two"]);
	}

?>