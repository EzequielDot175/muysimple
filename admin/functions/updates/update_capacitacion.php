<?php  
ob_start();
require "../../resource/db.php";

	$db = Conectar();


	$params = $_POST;


	foreach($_FILES as $key => $val):

		if(!empty($val['name'])){

			if(move_uploaded_file($val['tmp_name'], '../../../upload/'.$val['name'])){
				$params[$key] = $val['name'];
			}
			
		}
	endforeach;	


	$query = "UPDATE capacitacion SET ";

	$i = 0;

	foreach($params as $key => $val):
		if($key != 'submit' && $key != 'id_cap' && !empty($val)){

			if($i < 1){
				$query .= $key." = '".$val."'";
				$i++;
			}else{
				$query .= ",".$key." = '".$val."'";
			}
		}
	endforeach;

	$query .= " WHERE id_cap = ".$params['id_cap'];

	$db->query($query);


	header('location: ../../capacitacion.php');


	