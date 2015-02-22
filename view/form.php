<html>
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <form action="\dz9\OOP\model\new_recept.php" method="post">
            <label>Название:
            <input type="text" name="name"/>
            </label><br/>
            <label>Ингредиенты:
            <textarea name="ingredients"></textarea>
            </label><br/>
            <label>Приготовление:
            <textarea name="cook"></textarea><br/>
            <input type="submit" value="Отправить рецепт" />
            </label>
        </form>
    </body>
</html>