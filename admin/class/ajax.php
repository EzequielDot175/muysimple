<?php 
	require_once('class.integrantes.php');
	require_once('class.post.php');


	Post::exist('sort',function(){
		$integrantes = new Integrante();
		$integrantes->updateSort(Post::input('sort'));
	});
 ?>