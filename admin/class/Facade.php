<?php 
	trait Facade {

		public function __call($name,$arguments){
			return $this->{$name}($arguments);
		}

		
	}
 ?>