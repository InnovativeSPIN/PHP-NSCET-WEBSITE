setTimeout(function () {
  $("#modal-container").addClass("one");
}, 1000);

$("#modal-container").click(function () {
  $(this).addClass("out");
  $("body").removeClass("modal-active");
});
