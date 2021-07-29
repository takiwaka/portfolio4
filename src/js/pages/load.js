import $ from "jquery";

$(function () {
    $(".jsc-load-wrap").css("display", "none");
    $("#loader-bg ,#loader").addClass("is-active");

  $(window).on("load",function () {
    $("#loader-bg").delay(600).fadeOut(300);
    $("#loader").delay(600).fadeOut(300);
    $("jsc-load-wrap").css("display", "block");
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
