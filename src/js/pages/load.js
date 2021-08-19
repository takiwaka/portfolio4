import $ from "jquery";
import "arc-text";

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

$(function() {
  $("#sample1").arctext({
      radius : 200,
  });
  
  $("#sample2").arctext({
      radius : 150,
  });
  
  $("#sample3").arctext({
      radius : 150,
      dir: -1,
  });
  
  $("#sample4").arctext({
      radius : 200,
      rotate: false,
  });
});