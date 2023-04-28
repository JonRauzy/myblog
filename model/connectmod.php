<?php 

function connectUser($db, $userId){
    $sql = "SELECT * FROM bloguser WHERE bloguserID = $userId;";
    $prepare = $db->prepare($sql);
    try{
        $prepare->execute();
    }catch(Exception $e){
        return $e->getMessage();
    }   
}
