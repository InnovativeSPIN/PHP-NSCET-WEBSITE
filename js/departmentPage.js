// pursuits section

$(".carousel").carousel({
    interval: 3000
});

$(".carousel").on("touchstart", function (event) {
    var yClick = event.originalEvent.touches[0].pageY;
    $(this).one("touchmove", function (event) {
        var yMove = event.originalEvent.touches[0].pageY;
        if (Math.floor(yClick - yMove) > 1) {
            $(".carousel").carousel("next");
        } else if (Math.floor(yClick - yMove) < -1) {
            $(".carousel").carousel("prev");
        }
    });
    $(".carousel").on("touchend", function () {
        $(this).off("touchmove");
    });
});

function handleMouseWheel(event) {
    var deltaY = event.deltaY || event.originalEvent.deltaY;
    var scrollDirection = deltaY < 0 ? "up" : "down";

    if (scrollDirection === "up") {
      $(".carousel").carousel("prev");
    } else {
      $(".carousel").carousel("next");
    }

    event.preventDefault();
  }

$("#pursuits").on("wheel", handleMouseWheel);
