import $ from "jquery";
$(function () {
  $(window).on("load", function () {
    $(".jsc-load").addClass("is-active");

  });

  //n秒たったら強制的にロード画面を非表示
  $(function () {
    setTimeout(stopLoad, 3000);

    function stopLoad() {
      $(".jsc-load").addClass("is-active");
    }
  });
});
