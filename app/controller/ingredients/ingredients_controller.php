<?php
if (!class_exists("ingredients_model")) {
    require_once('C:/xampp/htdocs/cware/database/model/ingredients/ingredients_model.php');
}

class ingredients_controller
{

    function AllIngredients()
    {
        $query = new ingredients_model();
        return $query->AllIngredients();
    }
    function IngredientsXDishes()
    {
        $query = new ingredients_model();
        return $query->IngredientsXDishes();
    }

    
}
