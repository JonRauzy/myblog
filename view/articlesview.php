<?php

$title = "Articles";
include_once '../view/include/header.php';

?>

<div class="container-article">
    <?php foreach($articles as $item):?>
        <div class="article">
            <h2><?= $item -> articleTitle ?></h2>
            <p><?= $item -> articleContent?></p>
            <p><?= $item -> articleDate?></p>
        </div>
    <?php endforeach;?>
</div>

<?php

include_once '../view/include/footer.php';