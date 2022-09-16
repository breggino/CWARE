<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/cware/app/template/header.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/cware/app/controller/plate/plate_controller.php');
$plate_model = new plate_controller();

?>




<div class="container">
    <div class="text-center row">
        <div class="col">
            <img class="logo_img" src="./public/img/logo.jpg" alt="">
            <h4>Shanghai 21 Restaurant</h4>
            <h6> <i class="bi bi-geo-alt-fill" style="font-size: 1.5rem;"></i> 21 Mott St, New York, NY 10013, USA</h6>
            <hr>
        </div>
    </div>
</div>


<div class="container">
    <div class="text-center row">
        <div class="col"></div>
        <div class="col-6">
            <div class="mt-4 mb-4 col">
                <i class="next_arrow bi bi-arrow-right-circle-fill" style="font-size: 2.5rem;"></i>
            </div>
            <div class="card_next"></div>
            <div class="card_plates shadow card">
                <div class="mb-4 card-body">
                    <h5 class="card-title">Dishes</h5>
                    <h6 class="card-subtitle mb-2 text-muted">List of all dishes in the system</h6>

                    <div class="container">
                        <div class="row row-cols-auto">
                            <div class="col-12">
                                <div class="input-group input-group-sm mb-3">
                                    <input type="text" class="form-control" id="txt_search_plate" placeholder="Search a dish...">
                                    <div class="row row-cols-auto">
                                        <div class="col">
                                            <i class="filter_plates bi bi-3-circle-fill" style="font-size: 2rem;"></i>
                                        </div>
                                        <div class="col">
                                            <i class="view_all_plates bi bi-list" style="font-size: 2rem;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="all_plates" id="all_plates">
                                    <?php
                                    $plates_and_menus = $plate_model->DishesAndMenus();
                                    foreach ($plates_and_menus as $key) {
                                        $id_plate = $key['id_plate'];
                                        $name_plate = $key['name_plate'];
                                        $photo_plate = $key['photo_plate'];
                                        $name_menu = $key['name_menu'];
                                        $count_ingredients = $key['count_ingredients']; ?>
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
                                    <?php } ?>
                                </div>
                                <div id="result_search_plates"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>



<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/cware/app/template/footer.php');
