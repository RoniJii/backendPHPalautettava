<?php
//require_once 'inc/functions.php';
//require_once 'C:/xampp/htdocs/palautettevatyo/inc/headers.php';
if (isset($_SERVER['HTTP_ORIGIN'])) {
header("Access-Control-Allow-Origin: . {$_SERVER['HTTP_ORIGIN']}");}
header('Access-Control-Credentials:true');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
header('Access-Control-Max-age: 3600');  
header('Content-Type: application/json');


$db = new PDO('mysql:host=localhost;dbname=shoppinglist;charset=utf8','root','');
$sql = 'select * from item';
$query = $db->query($sql);
$results = $query->fetchAll(PDO::FETCH_ASSOC);
header('HTTP/1.1 200 OK');
print json_encode($results);