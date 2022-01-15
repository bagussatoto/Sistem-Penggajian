"use strict";

// Preloader
$(window).on("load", function () {
  function HideLoader() {
    setTimeout(function () {
      $("#Loader").fadeOut(100);
    }, 500);
  }

  HideLoader();
}); // Navbar

$(window).on("scroll load", function () {
  if ($(".navbar").offset().top > 40) {
    $(".navbar").addClass("shrink");
    $(".Gototop").css("visibility", "visible");
  } else {
    $(".navbar").removeClass("shrink");
    $(".Gototop").css("visibility", "hidden");
  }
}); // Portfolio Filter
// Active Class

$(".Filter_List .inline-list li").on("click", function () {
  var FilterClass = $(this).attr("filter");
  console.log(FilterClass);

  if (!$(this).hasClass("active")) {
    $(this).addClass("active");
    $(this).siblings().removeClass("active");
  }

  $(".Portfolio_projects .row .col-md-6").each(function () {
    if (FilterClass == "All") {
      $(this).fadeIn();
    } else {
      if ($(this).hasClass(FilterClass)) {
        $(this).fadeIn();
      } else {
        $(this).hide();
      }
    }
  });
}); // Toggle Active class

$(".collapse_menu").on("click", function () {
  $(this).toggleClass("active");
});