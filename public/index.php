<?php 

require_once '../config.php';

try {
     $db = new PDO ('mysql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME,DB_USER, DB_PWD);
     $db->exec("SET CHARACTER SET utf8");
     require_once '../model/contactmod.php';
 }catch(PDOException $e){
         die($e->getMessage());
 }

include '../view/homepageview.php';