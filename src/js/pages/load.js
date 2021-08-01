import $ from "jquery";

$(function () {

  $(window).on("load",function () {
    $("#loader-bg").addClass("is-active");
    $("#loader").addClass("is-active");
    $(".jsc-load-wrap").addClass("is-active");
  });

  //10秒たったら強制的にロード画面を非表示
  $(function () {
    setTimeout("stopload()", 10000);
    
    function stopload() {
      $("jsc-load-wrap").css("display", "block");
      $("#loader-bg").delay(900).fadeOut(800);
      $("#loader").delay(600).fadeOut(300);
    }
  });

  $(".jsc-load").addClass("is-active");
});
