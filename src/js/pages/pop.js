import $ from "jquery";
$(function () {

  $(".jsc-pop-button").on("click", function () {
    var $popContent = $(".jsc-pop-content");
    $(this).next($popContent).fadeIn();
  });

  $(".jsc-pop-close").on("click", function () {
    $(".jsc-pop-content").fadeOut();
  });
});
