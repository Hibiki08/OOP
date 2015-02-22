<?php
include_once '..\classes\SQL.php';

if (isset($_POST) && (empty($_POST['name']) ||
                    empty($_POST['ingredients']) ||
                    empty($_POST['cook']))) { ?>

<p>Не все поля заполнены!</p>

<?php
    include_once '..\view/form.php';
}

else {
    $new = new SQL_work;
    $new->Insert($_POST['Name'], $_POST['ingredients'], $_POST['cook']); ?>

<p>Рецепт успешно добавлен!</p>

<?php
    include_once '..\index.php';
}