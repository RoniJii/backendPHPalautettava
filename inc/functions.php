<?php
 function openDB() {
  $db = new PDO('mysql:host=localhost;dbname=item;charset=utf8','root','');
  $db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  return $db
}

 function returnError(PDOException $pdoex) {
  echo header('HTTP/1.1 500 Internal Server Error');
  $error = array('error' => $pdoex -> getmessage());
  print json_encode($error);
  exit;
}

/* try {
  $db = new PDO('mysql:host=localhost;dbname=item;charset=utf8','root','');
  $db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 
  $query = $db->prepare('insert into item(description) values (:description)');
  $query->bindValue(':description',$description, PDO::PARAM_STR);
  $query->execute();
 
  header('HTTP/1.1 200 OK');
  $data = array('id' => $db->lastInsertId(), 'description' => $description);
  print json_encode($data);
 } catch (PDOException $pdoex) {
  header('HTTP/1.1 500 Internal Server Error');
  $error = array('error' => $pdoex -> getmessage());
  print json_encode($error);
 } */