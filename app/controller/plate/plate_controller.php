<?php
if (!class_exists("plate_model")) {
    require_once('C:/xampp/htdocs/cware/database/model/plates/plate_model.php');
}

class plate_controller
{

    function DishesAndMenus()
    {
        $query = new plate_model();
        return $query->DishesAndMenus();
    }

    function Menus()
    {
        $query = new plate_model();
        return $query->Menus();
    }

    function SearchPlate($plate_name)
    {
        $query = new plate_model();
        return $query->SearchPlate($plate_name);
    }

    function SearchPlateById($plate_id)
    {
        $query = new plate_model();
        return $query->SearchPlateById($plate_id);
    }

    function DishesWithIngredients()
    {
        $query = new plate_model();
        return $query->DishesWithIngredients();
    }

    function UpdateDish($id_plate, $plate_name)
    {
        $query = new plate_model();
        return $query->UpdateDish($id_plate, $plate_name);
    }

    function DeleteDishFromMenu($id_plate)
    {
        $query = new plate_model();
        return $query->DeleteDishFromMenu($id_plate);
    }

   
}
