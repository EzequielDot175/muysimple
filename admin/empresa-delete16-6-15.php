<?php 
	require_once("class/class.empresas.php");
	if (isset($_POST["delete_empresa"])) {
		Empresa::delete($_POST["delete_empresa"]);
	}

?>