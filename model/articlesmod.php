<?php
function sqlArticles(pdo $db) : array|null{
$sqlArticles = $db->prepare('SELECT * FROM blogarticles ORDER BY blogDate DESC');
 try {
    $sqlArticles->execute();
    $dataArticles = $sqlArticles->fetchAll();
    return $dataArticles ;
 }catch(PDOException){
    $erreur = throw new Exception ( 'Problème avec la connection à la base de données');
      
 }
}


$dataArticles = sqlArticles($db);

class Articles
{
   public string $articleID;
   public string $articleTitle;
   public string $articleContent;
   public string $articleDate;
   
}

$articles = [];

foreach ($dataArticles as $item):
    $article = new Articles();
    $article->articleID = $item['blogID'];
    $article->articleTitle = $item['blogTitle'];
    $article->articleContent = $item['blogContent'];
    $article->articleDate = $item['blogDate'];


   $articles[]= $article;

endforeach;