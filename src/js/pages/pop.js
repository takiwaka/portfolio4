import $ from "jquery";
$(function () {
  var $popContent = $(".jsc-pop-content");
  var $popStop = $(".jsc-pop-stop");

  $(".jsc-pop-button").on("click", function () {
    $popContent.fadeIn();
    $popStop.addClass("is-stop");
  });

  $(".jsc-pop-close").on("click", function () {
    $popStop.removeClass("is-stop");
    $popContent.fadeOut();
  });
});
