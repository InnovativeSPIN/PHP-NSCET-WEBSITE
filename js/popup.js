setTimeout(function () {
  $("#modal-container").addClass("one");
}, 4000);

$("#modal-container").click(function () {
  $(this).addClass("out");
  $("body").removeClass("modal-active");
});
