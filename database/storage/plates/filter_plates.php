<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/cware/app/controller/plate/plate_controller.php');
$plate_model = new plate_controller();
$plates = $plate_model->DishesWithIngredients(); ?>
<h5 class="card-title">Dishes with 3+ ingredients</h5>
<?php
foreach ($plates as $keyplates) {

    $name_plate = $keyplates['name_plate'];
    $name_menu = $keyplates['name_menu'];
    $photo_plate = $keyplates['photo_plate'];
    $id_plate = $keyplates['id_plate'];
    $count_ingredients = $keyplates['count_ingredients']; ?>

    <div class="mb-2 shadow card plates_effect">
        <div class="card-body">
            <div class="row row-cols-auto">
                <div class="col-2">
                    <img src='./public/img/plates/<?php echo $photo_plate ?>' class='img_dishes' alt="Edit" />
                </div>
                <div class="col-6">
                    <small><?php echo $name_plate ?></small><br>
                    <div class="menu_name"><i><?php echo $name_menu ?></i></div>
                </div>
                <div class="col-2">
                    <div class="number_ingredients"><?php echo $count_ingredients ?></div>
                    <div class="menu_name"><i>Ingredients</i></div>
                </div>
                <div class="col-2">
                    <i class="edit_plates bi bi-three-dots-vertical" id="edit_plates" data-id_plate="<?php echo $id_plate ?>" style="font-size: 2rem;"></i>
                </div>
            </div>
        </div>
    </div>
<?php  } ?>