<?php 
	
	require_once("db.constants.php");

	/**
	* 
	*/
	class Capacitacion extends DB
	{
		protected $table = "capacitacion";
		protected $id_name_table = "id_cap";

		public static function obj(){
			return (new Capacitacion());
		}
		public static function all(){
			return self::obj()->callAll();
		}
		public static function add($array){
			return self::obj()->callAdd($array);
		}
		public static function edit($array,$where){
			return self::obj()->callEdit($array,$where);
		}
		public static function delete($array){
			return self::obj()->callDelete($array);
		}
		public static function find($id){
			return self::obj()->callFind($id);
		}
		
	}
	/**
	* 
	*/
	class GCapacitacion extends DB
	{
		protected $table = "galeria_capacitacion";
		protected $id_name_table = "id_galc";

		public function __construct(){
			//self::__construct();
		}

		public static function obj(){
			return (new GCapacitacion());
		}
		public static function all(){
			return self::obj()->callAll(array('by' => 'id_galc','order' => 'desc'));
		}
		public static function add($array){
			
			return self::obj()->callAdd($array);
		}
		public static function edit($array,$where){
			return self::obj()->callEdit($array,$where);
		}
		public static function delete($array){
			return self::obj()->callDelete($array);
		}
		public static function find($id){
			return self::obj()->callFind($id);
		}
	}



 ?>