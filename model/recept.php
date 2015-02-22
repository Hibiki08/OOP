<?php
include_once '..\classes\recept.php';
include_once '..\classes\BD_otladchik.php';

$new = new BD_otladchik;
$array = $new->SelectAll_array();

foreach ($array as $values) {

    if ($_GET['id'] == $values['id']) {
        $name = $values['Name'];
        $ingredients = $values['Ingredients'];
        $cook = $values['Cook'];
    }
}