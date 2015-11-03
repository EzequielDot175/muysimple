<?php 
	/**
	* Novedades
	*/

	class Novedades extends DB
	{
		
		private $limit = 3;
		private $pages;
		private $dates = array();

		function __construct()
		{
			parent::__construct();
		}

		public function getAll(){

			if($this->hasPage()):
				$novedades = $this->novPage();
				$novedades_tienda = $this->novPageShop();

			else:
				$novedades = $this->query(self::NOVEDADES_ALL);
				$novedades_tienda = $this->query(self::NOVEDADES_ALL_TIENDA);
			endif;


			$collection = array();
			$key = 0;
			foreach($novedades as $key => $val):
				$date = self::dateFormat($val->fecha);

				$item = new stdClass();
				$item->{'id'} = $val->id_novedad;
				$item->{'titulo'} = $val->titulo;
				$item->{'detalle'} = $val->detalle;
				$item->{'img'} = $val->imagen;
				$item->{'fecha'} = $date;
				$item->{'originDate'} = $val->fecha;
				$this->dates[] = $val->fecha;
				$collection[] = $item;
			endforeach;

			foreach($novedades_tienda as $key => $val):
				$date = self::dateFormat($val->fecha);

				$item = new stdClass();
				$item->{'id'} = $val->id_novtienda;
				$item->{'titulo'} = $val->titulo;
				$item->{'detalle'} = $val->detalle;
				$item->{'img'} = $val->imagen;
				$item->{'fecha'} = $date;
				$item->{'originDate'} = $val->fecha;
				$this->dates[] = $val->fecha;
				$collection[] = $item;
			endforeach;
			
			$collection = $this->byDateAsc($collection);
			
			
			return $collection;
		}

		public function getNewsIndex(){
			$off = 0;
			$lim = 4;
			$sel = $this->prepare(self::NOVEDADES_ALL_OFFSET_LIMIT);
			$sel->bindParam(':off', $off,PDO::PARAM_INT);
			$sel->bindParam(':lim', $lim,PDO::PARAM_INT);
			$sel->execute();
			$novedades = $sel->fetchAll(PDO::FETCH_OBJ);
			$collection = array();
			foreach($novedades as $key => $val):
				$date = self::dateFormat($val->fecha);

				$item = new stdClass();
				$item->{'id'} = $val->id_novedad;
				$item->{'titulo'} = $val->titulo;
				$item->{'detalle'} = $val->detalle;
				$item->{'img'} = $val->imagen;
				$item->{'fecha'} = $date;
				$item->{'originDate'} = $val->fecha;
				$collection[] = $item;
			endforeach;

			return $collection;
		}

		public function getNewsShop(){
			$novedades = $this->query(self::NOVEDADES_ALL_TIENDA_NOT_LIMIT);

			$collection = array();
			foreach($novedades as $key => $val):
				$date = self::dateFormat($val->fecha);

				$item = new stdClass();
				$item->{'id'} = $val->id_novtienda;
				$item->{'titulo'} = $val->titulo;
				$item->{'detalle'} = $val->detalle;
				$item->{'img'} = $val->imagen;
				$item->{'fecha'} = $date;
				$item->{'originDate'} = $val->fecha;
				$collection[] = $item;
			endforeach;

			return $collection;
		}

		public function paginator(){
			$sel = $this->query(self::NOVEDADES_COUNT);
			$count = $sel[0]->novedades + $sel[0]->tienda;
			$pages = round($count / ($this->limit * 2));

			$this->pages = $pages;
			return $pages;
		}

		public function next(){
			$current = (int)$_GET['page'];
			$next = ($current < $this->pages - 1 ? $current + 1: false);
			return $next;
		}
		public function prev(){
			$current = (int)$_GET['page'];
			$calcPrev = ($current - 1);
			$prev = ($calcPrev > 0 ? $calcPrev : false);
			return $prev;
		}

		public function novPage(){

			$offset = $this->hasPage();
			
			$sel = $this->prepare(self::NOVEDADES_ALL_OFFSET_LIMIT);
			$sel->bindParam(':off',$offset , PDO::PARAM_INT);
			$sel->bindParam(':lim', $this->limit, PDO::PARAM_INT);
			$sel->execute();
			return $sel->fetchAll(PDO::FETCH_OBJ);
		}
		public function novPageShop(){
			$offset = $this->hasPage();

			$sel = $this->prepare(self::NOVEDADES_ALL_TIENDA_OFFSET_LIMIT);
			$sel->bindParam(':off', $offset, PDO::PARAM_INT);
			$sel->bindParam(':lim', $this->limit, PDO::PARAM_INT);
			$sel->execute();
			return $sel->fetchAll(PDO::FETCH_OBJ);	
		}

		public function byDateAsc($collection){
			arsort($this->dates);
			$sort = array();
			foreach($this->dates as $key => $val):
				$sort[] = $collection[$key]; 
			endforeach;

			return $sort;
		}

		public function hasPage(){
			
			if(isset($_GET['page']) && is_numeric($_GET['page'])):
				return ($_GET['page'] > 1 ? $_GET['page']* $this->limit : 0 );
			else:
				return false;
			endif;
		}

		public static function checkSize($path_img){
			$max_height = 300;

			if (defined('LIBS_PATH')) {
				$path = LIBS_PATH."/".$path_img;
				if (file_exists($path)) {
					$data = getimagesize($path);
					
					if ($data[1] > $max_height ) {
						return 'none';
					}
				}
			}else{
				return '';
			}

			$min = 450;
		}

		public static function dateFormat($date = null){
			$date = new DateTime($date);
			$obj = new stdClass();
			$obj->{'day'} = $date->format('d');
			$obj->{'month'} = $date->format('m');
			$obj->{'year'} = $date->format('Y');
			return $obj;
		}

	}

 ?>