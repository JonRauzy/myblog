<?php

include_once '../view/include/header.php';

?>

<h2>Accueil</h2>

<?php foreach($users as $item):?>
    <p><?= $item-> userID?></p>
    <p><?= $item -> userName?></p>
    <p><?= $item -> userLogin?></p>
    <p><?= $item -> userPassword?></p>
<?php endforeach;?>


<?php

include_once '../view/include/footer.php';