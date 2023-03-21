<?php 

require_once '../config.php';
require_once '../model/contactmod.php';


try {
     $pdo = new PDO("mysql:host=DB_HOST;dbname=DB_NAME;port=DB_PORT", DB_LOGIN, DB_PWD);
} catch (Exception $e) {
     die($e->getMessage());
}


include '../view/homepageview.php';