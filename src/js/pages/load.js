import $ from "jquery";

$(function () {

  $(window).on("load",function () {
    $(".jsc-load").addClass("is-active");
  });
  
  //10秒たったら強制的にロード画面を非表示
  $(function () {
    setTimeout("stopload()", 10000);
    function stopload() {
      $(".jsc-load").addClass("is-active");
    }
  });

});
