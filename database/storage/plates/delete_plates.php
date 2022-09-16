<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/cware/app/controller/plate/plate_controller.php');
$plate_model = new plate_controller();


$id_plate = $_POST['id_plate'];

$delete_dish = $plate_model->DeleteDishFromMenu($id_plate);
?>
<div class="container">
    <div class="text-center row">
        <div class="col">
            <img src='./public/img/done.png' /><br>
            <small>Changes saved successfully</small><br>
            <small style="font-size: 10px;"> <i>You can now close this window</i></small>
        </div>
    </div>
</div>