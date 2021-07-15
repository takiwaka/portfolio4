import $ from "jquery";

$(function () {
  $(window).on("scroll", function () {
    $(".jsc-scroll-hide").each(function () {
      var $this = $(this),
        $window = $(window),
        scroll = $window.scrollTop(),
        windowHeight = $window.height(),
        position = $this.offset().top;

      if (scroll == 0) {
        $this.removeClass("is-active");
      }
      if (scroll > 100) {
        $this.addClass("is-active");
      }
    });
  });

  $(function () {
    $("a[href^='#']").on("click",function () {
      var headerHight = 40;
      var speed = 1000;
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? "html" : href);
      var position = target.offset().top - headerHight;
      $("html,body").animate({ scrollTop: position }, speed, "swing");
      $(".jsc-toggle-button-main,.jsc-nav-wrap-main").removeClass("is-open");
      return false;
    });
  });
});
