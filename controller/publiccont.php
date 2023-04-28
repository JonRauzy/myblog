<?php 

if(isset($_GET['p'])){
    switch($_GET['p']){
        case 'accueil':
            include_once '../view/homepageview.php';
            break;
        case 'articles':
            include_once '../view/articlesview.php';
            break;
        case 'connect':
            include_once '../view/connectView.php';
            break;
        default :
            include_once '../view/homepageview.php';
    }
}else{
    include_once '../view/homepageview.php';
}