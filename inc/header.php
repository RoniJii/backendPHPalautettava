<?php
if (isset($_SERVER['HTTP_ORIGIN'])) {
	header("Access-Control-Allow-Origin: . {$_SERVER['HTTP_ORIGIN']}");}
	header('Access-Control-Credentials:true');
	header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
	header('Access-Control-Allow-Headers: Content-Type');
	header('Access-Control-Max-age: 3600');  
	header('Content-Type: application/json');
	

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
	return 0;
}

