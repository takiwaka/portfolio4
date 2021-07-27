import $ from "jquery";
import "jquery-scrollify";

$(function () {
  var current;

  $.scrollify({
    section: ".jsc-scrollify",
    setHeights: false,
    before: function (i, box) {
      current = i;
    },
  });
  $(window).on("resize", function () {
    if (current) {
      var currentScrl = $(".jsc-scrollify").eq(current).offset().top;
      $(window).scrollTop(currentScrl);
    }
  });
});
