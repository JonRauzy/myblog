<?php

$title = "Articles";
include_once '../view/include/header.php';

?>

<?php foreach($articles as $item):?>
    <p><?= $item-> articleID?></p>
    <p><?= $item -> articleTitle ?></p>
    <p><?= $item -> articleContent?></p>
    <p><?= $item -> articleDate?></p>
<?php endforeach;?>

<?php

include_once '../view/include/footer.php';