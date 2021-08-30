import $ from "jquery";
$(function () {
  var $popContent = $(".jsc-pop-content");
  var $popStop = $(".jsc-pop-stop");
  var target = $(this).data('target');
  var pop = document.getElementsById(target);

  $(".jsc-pop-button").on("click", function () {
    pop.fadeIn();
    $popStop.addClass("is-stop");
    return false;
  });

  $(".jsc-pop-close").on("click", function () {
    pop.fadeOut();
    $popStop.removeClass("is-stop");
    return false;
  });
});
