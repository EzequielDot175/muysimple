<?php 
	require_once('db.constants.php');
	/**
	* 
	*/
	class Galeria
	{
		
		public function __construct(){}
		public static function get($id){
			$db = DB::get();
			$row = $db->query("SELECT * FROM galeria_emprendimiento WHERE id_em =".$id." ");
			self::fetch($row->fetchAll(PDO::FETCH_OBJ));
		}
		private static function fetch($array){
			
			// echo "<pre>";
			// print_r($array);
			// echo "</pre>";
			// 
			// 
			$elementos = count($array);

			$top = '
			<section class="slider_galeria">
				<div class="SegundaGaleriaswiper-container galeria_swiper_emprendimientos_'.rand(0,5000).'">	
				';


			if($elementos >'5'){ //si exede los 5 elementos se muestran las flechas
				$botones = '
			 	   	<button type="button" class="arrow-left4 slider-button left">
					   	<span class="icon sliderLeft"></span>
					</button> 
					
					<button type="button" class="arrow-right4 slider-button right">
					   	<span class="icon sliderRight"></span>
					</button>
					<div class="swiper-wrapper">
					
					';
			}else{
				$botones = '
				
					<div class="swiper-wrapper">
					';
			}
			

			$item = '';
			$bottom = '
					</div>
					    
					<div class="pagination"></div>
					
				</div>
			</section>';

			$rand = rand(0, 20);
			foreach($array as $k => $v):
				$item .= '
				<div class="swiper-slide">
					
					<div class="title">
						<a href="'.self::getUri().$v->galeria.'" rel="lytebox[imagen'.$rand.']">
							<div style ="width: 241px; height:167px; overflow: hidden; margin-right:10px" >
								<img src="'.self::getUri().$v->galeria.'" width="110%" />
							</div>
						</a>
					</div>
				
				</div>';
			endforeach;
			$html = $top.$botones.$item.$bottom;
			echo($html);
		}
		public static function Fundacion(){
			$db = DB::get();
			$row = $db->query("SELECT * FROM galeria_principal");
			$html = "";
			$results = $row->fetchAll();
			
                        
                        
			foreach($results as $k => $v):
				$html .= ' 
				<div class="swiper-slide Galeriaswiper-container">
	            	<div  style="width:100%">
		            	<img class="slide-img '.self::checkSize('upload/'.$v["imagen"]).'" src="upload/'.$v["imagen"].'" style="top: 0;left: 0;margin:0;">
		            	<a href="LaTienda.php">
		            	<div class="row">
			            	<div class=" slider-data PlacaTienda"><h1>'.$v["titulo"].'</h1>
			            		<p class="SacarSeccionCelular">'.$v["descripcion"].'</p>
		            		</div>
		            	</div>
		            	</a>
	            	</div>
	            </div>
	            ';
	            
			endforeach;
			// self::checkSize('upload'.$v["imagen"]);
			echo $html;
		}
		public static function checkSize($path_img){
			$min_height = 450;

			if (defined('LIBS_PATH')) {
				$path = LIBS_PATH."/".$path_img;
				if (file_exists($path)) {
					$data = getimagesize($path);
					
					if ($data[1] >= $min_height ) {
						return 'img_full_width';
					}else {
						return 'img_full_expand';
					}
				}
			}else{
				return '';
			}

			$min = 450;
		}
		public static function getUri(){
			return 'http://'.$_SERVER["HTTP_HOST"]."/upload/";
		}
	}
 ?>