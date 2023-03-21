<?php
function sqlUsers(pdo $db) : array|null{
$sqlUsers = $db->prepare('SELECT * FROM users');
 try {
    $sqlUsers->execute();
    $dataUsers = $sqlUsers->fetchAll();
    return $dataUsers ;
 }catch(PDOException){
    $erreur = throw new Exception ( 'Problème avec la connection à la base de données');
      
 }
}


$datasUsers = sqlUsers($db);

class Users 
{
   public string $userID;
   public string $userName;
   public string $userLogin;
   public string $userPassword;
}

$users = [];

foreach ($datasUsers as $item):
   $user = new Users();
   $user->userID = $item['id'];
   $user->userLogin = $item['name'];
   $user->userName = $item['login'];
   $user->userPassword = $item['password'];

   $users[]= $user;

endforeach;
