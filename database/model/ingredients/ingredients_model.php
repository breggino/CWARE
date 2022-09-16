<?php
if (!class_exists("db_config")) {
    require_once($_SERVER['DOCUMENT_ROOT'] . '/cware/config/db_config.php');
}

class ingredients_model
{

    function AllIngredients()
    {
        $conn = new db_config();
        $sql = "SELECT id_ingredient, name_ingredient, photo_ingredient, COUNT(id_plate) as count_plates
        FROM ingredient
        LEFT JOIN use_ingredients USING(id_ingredient)
        GROUP BY id_ingredient
        ORDER BY count_plates  DESC
        ";

        return $conn->execute($sql);
    }

    function IngredientsXDishes()
    {
        $conn = new db_config();
        $sql = "SELECT id_ingredient, name_ingredient, photo_ingredient, COUNT(id_plate) as count_plates
        FROM ingredient
        LEFT JOIN use_ingredients USING(id_ingredient)
        GROUP BY id_ingredient
        ORDER BY count_plates  DESC
        ";

        return $conn->execute($sql);
    }
}
