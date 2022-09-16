$(document).on("keyup", "#txt_search_plate", function () {
  var name_plate = $(this).val();

  if (name_plate != "") {
    $("#all_plates").hide();
    SearchPlate(name_plate);
  }
});

function SearchPlate(plate_name) {
  $.ajax({
    url: "/cware/database/storage/plates/search_plates.php",
    type: "POST",
    dataType: "HTML",
    data: {
      plate_name: plate_name,
    },
  }).done(function (html) {
    $("#result_search_plates").html(html);
  });
}

$(".view_all_plates").on("click", function () {
  $.ajax({
    url: "/cware/database/storage/plates/all_plates.php",
    type: "POST",
    dataType: "HTML",
    data: {},
  }).done(function (html) {
    $(".all_plates").remove();
    $("#result_search_plates").html(html);
    $("#txt_search_plate").val("");
  });
});

$(".filter_plates").on("click", function () {
  $.ajax({
    url: "/cware/database/storage/plates/filter_plates.php",
    type: "POST",
    dataType: "HTML",
    data: {},
  }).done(function (html) {
    $(".all_plates").remove();
    $("#result_search_plates").html(html);
    $("#txt_search_plate").val("");
  });
});

$(".edit_plates").on("click", function () {
  let id_plate = $(this).data("id_plate");
  $.ajax({
    url: "/cware/database/storage/plates/edit_plates.php",
    type: "POST",
    data: {
      id_plate: id_plate,
    },
  }).done(function (html) {
    $("#result_search_plates").html(html);
    $("#modal_edit").modal("show");
  });
});

$(".next_arrow").on("click", function () {
  $.ajax({
    url: "/cware/database/storage/ingredients/all_ingredients.php",
    type: "POST",
    dataType: "HTML",
    data: {},
  }).done(function (html) {
    $(".card_plates").hide();
    $(".next_arrow").hide();
    $(".card_next").html(html);
  });
});
