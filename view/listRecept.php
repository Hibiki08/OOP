<?php
include_once __DIR__ . '\..\classes\BD_otladchik.php';
?>

<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
    <?php
    $array = new SQL_work;
    $selectAll_array = $array->SelectAll_array();

    foreach ($selectAll_array as $values) { ?>

    <ul>
        <li><a href="recept.php?id=<?php echo $values['id']; ?>"><?php echo $values['Name']; ?></a></li>
    </ul>

    <?php
    }
    ?>
    </body>
</html>