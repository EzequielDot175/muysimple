<?php 

	interface DBConstants {
		const ALL_FIND = "SELECT * FROM :table WHERE :id = :value";


		/**
		 * CLASS : NOVEDADES 
		 */
		
		const NOVEDADES_ALL        = " SELECT * FROM novedades ORDER BY id_novedad DESC LIMIT 3 ";
		const NOVEDADES_ALL_TIENDA = " SELECT * FROM novedades_tienda ORDER BY id_novtienda DESC LIMIT 3";
		const NOVEDADES_ALL_TIENDA_NOT_LIMIT = " SELECT * FROM novedades_tienda ORDER BY id_novtienda DESC";
		const NOVEDADES_COUNT 	   = " SELECT 
									    (SELECT COUNT(id_novedad) FROM novedades ) as novedades,
									    (SELECT COUNT(id_novtienda) FROM novedades_tienda ) as tienda
									    
									     from novedades LIMIT 1";
		const NOVEDADES_ALL_OFFSET_LIMIT = " SELECT * FROM novedades ORDER BY id_novedad DESC LIMIT :off, :lim ";									    
		const NOVEDADES_ALL_TIENDA_OFFSET_LIMIT = " SELECT * FROM novedades_tienda ORDER BY id_novtienda DESC LIMIT :off, :lim ";									    



	}

 ?>