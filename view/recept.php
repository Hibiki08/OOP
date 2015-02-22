<?php
include_once '..\classes\recept.php';
include_once '..\model\recept.php';
?>
<html>
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
    <?php
    $once_recept = new Recept;
    $once_recept->Recept();
    ?>
    <h2><?php echo $once_recept->name = $name; ?></h2>
    <h3>Ингредиенты:</h3>
    <p><?php echo $once_recept->ingredients = $ingredients; ?></p>
    <h3>Приготовление:</h3>
    <p><?php echo $once_recept->cook = $cook; ?></p>
    </body>
</html>
