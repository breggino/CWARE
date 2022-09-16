<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/cware/app/controller/ingredients/ingredients_controller.php');
$ingredients_model = new ingredients_controller();
?>

<div class="container">
    <div class="mt-4 mb-4 row">
        <div class="col"></div>
        <div class="col-2">
            <i class="left_arrow bi bi-arrow-left-circle-fill" style="font-size: 2.5rem;"></i>
        </div>
        <div class="col-2">
            <i class="right_arrow bi bi-arrow-right-circle-fill" style="font-size: 2.5rem;"></i>
        </div>
        <div class="col"></div>

    </div>
</div>


<div class="card_plates shadow card">
    <div class="mb-4 card-body">
        <h5 class="card-title">Ingredients</h5>
        <h6 class="card-subtitle mb-2 text-muted">List of all Ingredients in the system</h6>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div id="result_search_plates"></div>
                    <?php
                    $ingredients = $ingredients_model->AllIngredients();
                    foreach ($ingredients as $keyingredients) {

                        $name_ingredient = $keyingredients['name_ingredient'];
                        $photo_ingredient = $keyingredients['photo_ingredient'];
                        $count_plates = $keyingredients['count_plates']; 
                        $id_ingredient = $keyingredients['id_ingredient']; ?>

                        <div class="mb-2 shadow card plates_effect">
                            <div class="card-body">
                                <div class="row row-cols-auto">
                                    <div class="col-2">
                                        <img src='./public/img/ingredients/<?php echo $photo_ingredient ?>' class='img_dishes' alt="Edit" />
                                    </div>
                                    <div class="col-8">
                                        <small><?php echo $name_ingredient ?></small>
                                    </div>
                                    <div class="col-2">
                                        <div class="number_ingredients"><?php echo $count_plates ?></div>
                                        <div class="menu_name"><i>Dishes</i></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>