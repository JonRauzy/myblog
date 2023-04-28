<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/homepage.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="./">Jon's Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="?p=accueil">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?p=articles">Article</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?p=connect">connection</a>
      </li>
      
    </ul>
  </div>
</nav>

<!-- <div class="nav">
   
        <a href="?p=accueil">accueil</a>
        <a href="?p=articles">articles</a>
        <a href="?p=accueil">accueil</a>
        <a href="?p=articles">articles</a>
        <a href="?p=accueil">accueil</a>
        <a href="?p=articles">articles</a>
 
</div> -->

<h1><?= $title ?></h1>
