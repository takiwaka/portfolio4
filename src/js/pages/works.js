import $ from "jquery";
import "slick-carousel";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";

$(function () {
  var $slickWorks = $(".slick-works");

  $slickWorks.slick({
    arrows: false,
    centerMode: true,
    centerPadding: '10%',
    asNavFor: ".slick-works-sub",
  });

  $(".slick-works-sub").slick({
    asNavFor: ".slick-works",
    focusOnSelect: true,
    slidesToShow: 3,
    slidesToScroll: 1,
  });
});
