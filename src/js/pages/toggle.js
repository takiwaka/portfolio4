import $ from "jquery";

$(function () {
  $(".jsc-toggle-button-main").on("click", function () {
    $(".jsc-toggle-button-main,.jsc-nav-wrap-main").toggleClass("is-open");
  });

  $(".jsc-nav-close").on("click", function () {
    $(".jsc-toggle-button-main,.jsc-nav-wrap-main").removeClass("is-open");
  });
});
