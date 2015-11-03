<?php 

	/**
	* 
	*/
	class Pagination
	{
		private static $total;
		private static $limit;
		private static $current;
		private static $page;

		function __construct(){}
		public static function setLimits(){
			$limit = 5;
			if (isset($_GET["page"])):
				$page = (int)$_GET["page"];
				$offset = ($page != 1 ? $page*$limit-$limit : 0);
			else:
				$offset = 0;
			endif;
			return array("offset" => $offset ,"limit" => $limit);
		}
		public static function getLinks($db,$table){
			$limit = 5;
			$total = "SELECT COUNT(*) as total FROM ".$table;
			$total = $db->query($total)->fetch_object()->total;
				if (isset($_GET["page"]) && $_GET["page"] > 1) :
					$pagination = $_GET["page"];
					else:
					$pagination = 1;
				endif;
					$links = round((int)$total/$limit);
					$medio = round((int)$total/$limit,PHP_ROUND_HALF_UP);
					if ($medio > $links && $medio < $links+1) :
						$links = $links+1;
					endif;
					$html = '<div class="row">';
					if($links > 1):
						for ($i=1; $i <= $links; $i++) :
							if($i == $pagination):
								$html .= '<a class="link-pagination active" href="">'.$i.'</a>';
							else:
								$html .= '<a class="link-pagination" href="?page='.$i.'">'.$i.'</a>';
							endif;
						endfor;
					endif;
					$html .= '</div>';
					echo($html);
		}

	}



 ?>