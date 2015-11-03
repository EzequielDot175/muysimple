<?php 
	
	require_once('Facade.php');

	class DataManager{
		private $data;

		public function __construct($data){
			if(count($data) > 0):
				foreach($data as $k => $v):
					foreach($v as $z => $val):
						if(is_numeric($z)):
							unset($data[$k][$z]);
						endif;
					endforeach;
				endforeach;
				$this->data = $data;
			endif;
                        
		}
		public function toJson(){
			return json_encode($this->data);
		}
		public function toObject(){
            return $this->data;
		}
		public function get(){
			return $this->data;
		}
	}
	/**
	* 
	*/
	class DB extends PDO implements DBConstants
	{

		use Facade;


		protected $table = null;
		protected $id_name_table = null;
		protected $db;
		protected $results;
		protected $config;
		// protected static $table;
		public function __construct(){

			$config = new stdClass();

			if(is_numeric(strpos($_SERVER['HTTP_HOST'], 'localhost')) || is_numeric(strpos($_SERVER['REQUEST_URI'], '/dev'))):
				$config->{'dbname'} = 'msimple_dev';
				$config->{'dbuser'} = 'msimple_dev';
				$config->{'dbpass'} = 'msimple_dev'; 
			else:
				$config->{'dbname'} = 'msimple_muy';
				$config->{'dbuser'} = 'msimple_simple';
				$config->{'dbpass'} = 'msimple1243**'; 
			endif;
			$this->config = $config;
			$this->attributes = array(
				PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
				);

			parent::__construct('mysql:host=localhost;dbname='.$config->dbname,$config->dbuser,$config->dbpass,$this->attributes);



		}



		public static function get(){
			$config = new stdClass();

			if(is_numeric(strpos($_SERVER['HTTP_HOST'], 'localhost')) || is_numeric(strpos($_SERVER['REQUEST_URI'], '/dev'))):
				$config->{'dbname'} = 'msimple_dev';
				$config->{'dbuser'} = 'msimple_dev';
				$config->{'dbpass'} = 'msimple_dev'; 
			else:
				$config->{'dbname'} = 'msimple_muy';
				$config->{'dbuser'} = 'msimple_simple';
				$config->{'dbpass'} = 'msimple1243**'; 
			endif;
			// $this->config = $config;
			$attributes = array(
				PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
				);

			return new PDO('mysql:host=localhost;dbname='.$config->dbname,$config->dbuser,$config->dbpass,$attributes);
		}
		public function query($sql){
			$data = self::get()->query($sql)->fetchAll(PDO::FETCH_OBJ);
                        
                       
			// $obj = new DataManager($data);
                        
                       
			return $data;
		}

		public function callAll($order = null){
                                                $sql = "Select * from ".$this->table;
                                                        if(!is_null($order)){
                                                            $sql .= " ORDER BY ".$order['by']." ".$order['order'];
                                                        }
                                                        
			return $this->query($sql);
		}
		private function defineTable($array){
			if(isset($array["table"])):
					$table = $array["table"];
					unset($array["table"]);
				else:
					$table = $this->table;
				endif;
			return $table;
		}
		public function callAdd($array){
			

				$table = $this->defineTable($array);

				$sql = "INSERT INTO ".$table." ";
				$i = 1;
				$count = count($array);
				$cellName = "";
				$cellValue = "";

				foreach($array as $k => $v):
					$cellName .= ( $i == $count ? ",".$k.")" : ($i == 1 ? "(".$k : ",".$k) );
					$cellValue .= ( $i == $count ? ",'".$v."')" : ($i == 1 ? "('".$v."'" : ",'".$v."'") );
					$i++;
				endforeach;

				$sql = $sql.$cellName." VALUES ".$cellValue;
                                                                                                
				return $this->db->exec($sql);

			
		}
		public function callEdit($array,$where){
			try {

				$table = $this->defineTable($array);
				$sql =  "UPDATE ".$table." SET ";
				$i = 1;
				$set = "";
				foreach($array as $k => $v):
					if($i == 1):
						$set .= $k." = '".$v."'";
						$i++;
					else:
						$set .= ",".$k." = '".$v."'";
					endif;
				endforeach;
				$cond = " WHERE ".$where[0]." ".$where[1]." '".$where[2]."'";
				// echo($sql.$set.$cond);
				return self::get()->exec($sql.$set.$cond);
				
			} catch (Exception $e) {
				echo($e->getError());
			}
		}
		public function callDelete($array){
			try {
				$table = $this->defineTable($array);
				$sql =  "DELETE FROM ".$table." WHERE ".$array[0]." ".$array[1]." ".$array[2];
				return $this->db->exec($sql);
			} catch (Exception $e) {
				echo($e->getError());
			}
		}
		public function callCount($array){
			try {
				$sql = "SELECT COUNT(".$array["rowName"].") as count FROM ".$this->table." WHERE ".$array["rowName"]." ".$array["operator"]." '".$array["value"]."'";
				return $this->query($sql);
			} catch (Exception $e) {	
				echo($e->getError());
			}
		}
		public function callFind($id){
			try {
				$sql = "SELECT * FROM ".$this->table." WHERE ".$this->id_name_table." = ".$id;
				return self::get()->query($sql)->fetch(PDO::FETCH_OBJ);
			} catch (PDOException $e) {
				echo $e->getMessage();
			}
			
		}

	}




 ?>