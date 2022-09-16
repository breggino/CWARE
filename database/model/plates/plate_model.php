<?php
if (!class_exists("db_config")) {
    require_once($_SERVER['DOCUMENT_ROOT'] . '/cware/config/db_config.php');
}

class plate_model
{

    function DishesAndMenus()
    {
        $conn = new db_config();
        $sql = "SELECT id_plate, name_plate, photo_plate, COALESCE(name_menu,'Without menu')AS name_menu, COUNT(id_ingredient)AS count_ingredients
        FROM plate
        LEFT JOIN menu_details USING(id_plate)
        LEFT JOIN menu USING(id_menu)
        LEFT JOIN use_ingredients USING(id_plate)
        LEFT JOIN ingredient USING(id_ingredient)
        GROUP BY id_plate
        ORDER BY count_ingredients DESC
        ";

        return $conn->execute($sql);
    }

    function Menus()
    {
        $conn = new db_config();
        $sql = "SELECT id_menu, name, day_menu
        FROM menu";

        return $conn->execute($sql);
    }

    function SearchPlate($plate_name)
    {
        $conn = new db_config();
        $sql = "SELECT id_plate, name_plate, photo_plate, COALESCE(name_menu,'Without menu')AS name_menu, COUNT(id_ingredient)AS count_ingredients
        FROM plate
        LEFT JOIN menu_details USING(id_plate)
        LEFT JOIN menu USING(id_menu)
        LEFT JOIN use_ingredients USING(id_plate)
        LEFT JOIN ingredient USING(id_ingredient)
        WHERE name_plate LIKE '%$plate_name%'
        GROUP BY id_plate
        ORDER BY count_ingredients DESC
        ";

        return $conn->execute($sql);
    }

    function SearchPlateById($plate_id)
    {
        $conn = new db_config();
        $sql = "SELECT id_plate, name_plate, photo_plate, COALESCE(name_menu,'Without menu')AS name_menu
        FROM plate
        LEFT JOIN menu_details USING(id_plate)
        LEFT JOIN menu USING(id_menu)
        WHERE id_plate = $plate_id";

        return $conn->execute($sql);
    }

    function DishesWithIngredients()
    {
        $conn = new db_config();
        $sql = "SELECT id_plate, name_plate, photo_plate, COALESCE(name_menu,'Without menu')AS name_menu, COUNT(id_ingredient)AS count_ingredients
        FROM plate
        LEFT JOIN menu_details USING(id_plate)
        LEFT JOIN menu USING(id_menu)
        LEFT JOIN use_ingredients USING(id_plate)
        LEFT JOIN ingredient USING(id_ingredient)
        GROUP BY id_plate
        HAVING COUNT(id_ingredient) >= 3
        ORDER BY count_ingredients DESC";
        return $conn->execute($sql);
    }

    function UpdateDish($id_plate, $plate_name)
    {
        $conn = new db_config();
        $sql = "UPDATE plate
        SET name_plate = '$plate_name'
        WHERE id_plate = $id_plate";
        return $conn->execute($sql);
    }

    function DeleteDishFromMenu($id_plate)
    {
        $conn = new db_config();
        $sql = "DELETE FROM menu_details
        WHERE id_plate = $id_plate";
        return $conn->execute($sql);
    }
}
