<?php 

if(isset($_GET['p'])){
    switch($_GET['p']){
        case 'accueil':
            include_once '../view/homepageview.php';
            break;
        case 'articles':
            include_once '../view/articlesview.php';
            break;
        default :
            include_once '../view/homepageview.php';
    }
}else{
    include_once '../view/homepageview.php';
}