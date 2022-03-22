<?php
	
	require_once'../radius_get_vendor/autoload.php'

	if ($_GET['url']) {
	 	$url = explode('/', $_GET['url']);

	 	if ($url[0] == 'api') {
	 		array_unshift($url);
	 		$service = $url[0];

	 		$method = $_SERVER['REQUEST_METHOD'];
	 	}
	 } 
 ?>