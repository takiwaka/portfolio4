import $ from "jquery";
$(function () {
  var $popContent = $(".jsc-pop-content");
  var $popStop = $(".jsc-pop-stop");

  $(".jsc-pop-button").on("click", function () {
    var target = $(this).data('target');
    var pop = document.getElementById(target);

    $(pop).fadeIn();
    $popStop.addClass("is-stop");
    return false;
  });

  $(".jsc-pop-close").on("click", function () {
    $popContent.fadeOut();
    $popStop.removeClass("is-stop");
    return false;
  });
});
