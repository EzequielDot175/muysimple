<?php 
	/**
	* 
	*/
	class Config extends DB
	{
		protected $table = "config";

		public static function option($name){
			$sql = "Select * from config where name = '".$name."'";
			return (new Config())->query($sql)->toObject()[0]->value;
		}
		public static function add($array){
			return (new Config())->callAdd($array);
		}
		public static function edit($array,$where){
			return (new Config())->callEdit($array,$where);
		}
		public static function delete($array){
			return (new Config())->callDelete($array);
		}
		public static function exist($name){
			$row = (new Config())->callCount(array("rowName" => "name","operator" => "=", "value"=> $name))->get();
			return ( $row[0]["count"] > 0 ? true : false);
		}
	}

 ?>