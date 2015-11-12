<?php 
	
	class Cropper
	{
		private $base64 = "";
		private $name = "";
		private $path = "";

		function __construct($base64)
		{
			if(!empty($base64)){
				$this->base64 = $base64;
			}else{
				throw new Exception("Codificación de la imagen no enviada", 1);
			}
			
		}
		private function random($name = null){
			if(is_null($name)){
				$this->name = substr(md5("CONSTANT_SECRET".rand(100000,999999)), 0, 10).".png";
			}else{
				$this->name = $name.".png";
			}
			return $this->name;
		}
		public function setPath($path){
			$this->path = $path;
		}

		public function defaultFile($filepath){
			if(!file_exists($filepath)){
				$fp = fopen($filepath, 'w+');
				fwrite($fp, '');
				fclose($fp);
			}
		}

		public function getName(){
			return $this->name;
		}

		public function generate($name = null){

		
			try {
				$filepath = $this->path.$this->random($name);

				//if file not exist, this method can create for default
				
				$this->defaultFile($filepath);

				if(!empty($this->base64)){
					$data = $this->base64;
					list($type, $data) = explode(';', $data);
					list(, $data)      = explode(',', $data);
					$data = base64_decode($data);
					
					if(!is_numeric(file_put_contents($filepath , $data))){
						throw new Exception("Error, no se pudo generar la imagen", 1);
					}
				}
			} catch (Exception $e) {
				echo($e->getMessage());
			}
		}
	}

	
?>