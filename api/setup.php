<?php
 $db = new PDO('mysql:host=localhost;dbname=lotus', 'root',"");

 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 try{

 }
 catch(PDOException $e){
  echo $e->getMessage();
 }
?>
