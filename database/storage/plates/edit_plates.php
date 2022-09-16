<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/cware/app/controller/plate/plate_controller.php');
$plate_model = new plate_controller();
$id_plate = $_POST['id_plate'];

$data_plate = $plate_model->SearchPlateById($id_plate);
foreach ($data_plate as $keydata_plate) {
    $name_plate = $keydata_plate['name_plate'];
    $photo_plate = $keydata_plate['photo_plate'];
    $name_menu = $keydata_plate['name_menu'];
} ?>



<div class="modal fade" id="modal_edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Editing the dish: <?php echo $name_plate ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="succes_update"></div>
                <div class="content_edit">
                    <div class="container">
                        <div class="mb-4 text-center row">
                            <div class="col">
                                <img src='./public/img/plates/<?php echo $photo_plate ?>' class='img_dishes_edit' />
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">

                            <div class="col">
                                <label for="">Dish name:</label><br>
                                <div class="input-group input-group-sm mb-3">
                                    <input type="text" class="form-control" id="txt_name_dish" value="<?php echo $name_plate ?>">
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="container">
                        <div class="text-center row">
                            <div class="col">
                                <button type="button" id="btn_update_dish" data-id_plate="<?php echo $id_plate ?>" class="btn btn-primary">Update dish</button>
                            </div>
                            <div class="col">
                                <button type="button" id="btn_delete_menu" data-id_plate="<?php echo $id_plate ?>" class="btn btn-danger">Delete from menu</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $("#btn_update_dish").on("click", function() {
        let name_plate = $('#txt_name_dish').val();
        let id_plate = $(this).data("id_plate");

        $.ajax({
            url: "/cware/database/storage/plates/update_plates.php",
            type: "POST",
            dataType: "HTML",
            data: {
                name_plate: name_plate,
                id_plate: id_plate
            },
        }).done(function(html) {
            $(".content_edit").remove();
            $(".succes_update").html(html);
        });
    });

    $("#btn_delete_menu").on("click", function() {

        let id_plate = $(this).data("id_plate");

        $.ajax({
            url: "/cware/database/storage/plates/delete_plates.php",
            type: "POST",
            dataType: "HTML",
            data: {
                id_plate: id_plate
            },
        }).done(function(html) {
            $(".content_edit").remove();
            $(".succes_update").html(html);
        });
    });
</script>