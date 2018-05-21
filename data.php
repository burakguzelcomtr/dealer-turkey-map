<?php /* Template Name: BayilerJson */  
 
	
	function handle_get_all( ) { 
	global $wpdb;
 
	$bayiler = $wpdb->get_results ( "SELECT wp_maptr.id as mapId, wp_maptr.sehir as sehir,wp_maptr.slug as slug, wp_maptr.path as pathed, wp_distributors.cityId as cityId, 
	GROUP_CONCAT(CONCAT_WS(':', wp_distributors.title, wp_distributors.address,wp_distributors.tel,wp_distributors.location) SEPARATOR '|') as adresler
	 from wp_maptr INNER JOIN wp_distributors ON wp_maptr.id = wp_distributors.cityId GROUP BY mapId" );
	
	foreach ($bayiler as $bayi){
			
				echo $bayi->sehir; 
				echo $bayi->mapId;
		}
	

	}

	handle_get_all();
?>