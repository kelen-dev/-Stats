'use strict';
$(document).ready(function() {
  $(".theme_button").click(function() {
    if ($(".theme_button").hasClass("night")) {
      $("body").removeClass("night");
      $(".theme_button").removeClass("night");
      $(".box").removeClass("boxedin");
      $(".switch").removeClass("switchedin");
      $(".te").removeClass("teedin");
      $("body").addClass("day");
      $(".theme_button").addClass("day");
      $(".yoke").addClass("unyoked");
      $(".box").addClass("boxedout");
      $(".switch").addClass("switchedout");
      $(".te").addClass("teedout");
    } else {
      $(".yoke").removeClass("unyoked");
      $(".switch").removeClass("switchedout");
      $(".te").removeClass("teedout");
      $("body").removeClass("day");
      $(".theme_button").removeClass("day");
      $(".box").removeClass("boxedout");
      $(".yoke").addClass("yoked");
      $("body").addClass("night");
      $(".theme_button").addClass("night");
      $(".box").addClass("boxedin");
      $(".switch").addClass("switchedin");
      $(".te").addClass("teedin");
    }
  });
}); //#f44327 really awesome red