jQuery(document).ready(function($) {
  $(window).scroll(function() {
    console.log($(window).scrollTop());
    if ($(window).scrollTop() > 65) {
      $("header").addClass("stick");
    } else {
      $("header").removeClass("stick");
    }
  });
});
