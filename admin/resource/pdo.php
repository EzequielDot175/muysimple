<?php 

/**
* 
*/
class UserInfo extends PDO
{
	private $db;
	private $currentUserName;
	public $success;

	public function __construct()
	{
		//$this->db = new PDO('mysql:host=localhost;dbname=msimple_muy', "msimple_simple", "msimple1243**"); //produccion
		$this->currentUserName = $_SESSION["user"];
		$this->tokenGenerate();
		$this->success = "";

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

		$this->db = new PDO('mysql:host=localhost;dbname='.$config->dbname,$config->dbuser,$config->dbpass,$this->attributes);
	}
	public function getCurrentUserName(){
		$row = $this->db->query("SELECT user FROM usuarios WHERE id_user = ".(int)$_SESSION["user_id"]."");
		$row = $row->fetch();
		echo $row["user"];
	}
	public function tokenGenerate(){
		if (!isset($_SESSION["token"])) {
			$str = "here!thisismytoken";
			$randNum = (string)rand(10000, 20000);
			session_start();
			$_SESSION["token"] = md5($str.$randNum);
		}
	}

	public function changeInfoUser($vars){
		if ($_SESSION["token"] == $vars["token"]) :
			if (!empty($vars["username"])) :
				$sql = "UPDATE usuarios SET user = '%newuser%'";
				$sql = $this->checkPassword($vars, $sql);
				$sql .= " WHERE id_user = '%id_user%' ";

				$sql = str_replace("%newuser%", htmlspecialchars($vars["username"]), $sql);
				$sql = str_replace("%id_user%", $_SESSION["user_id"], $sql);
				$row = $this->db->exec($sql);
				if ($row > 0) {
					$this->success = "Cambio realizado correctamente";
				}
			endif;
		endif;
	}
	private function Hash($var){
		return crypt($var);
	}
	private function checkPassword($vars, $sql){
		if (!empty($vars["password-1"]) && !empty($vars["password-2"]) ):
			if($vars["password-1"] == $vars["password-2"]):
				$sql .= " , pass = '%pass%' ";
				return $sql = str_replace("%pass%", htmlspecialchars($vars["password-1"]), $sql);
			endif;
		else:
			return $sql;
		endif;
	}
	
	
	

}


 ?>