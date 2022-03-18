jQuery(document).ready(function($) {
  //mobile menu activator

  $(window).bind("mousewheel", function (event) {
    if (event.originalEvent.wheelDelta >= 0) {
      $("header").removeClass("dis");
    } else {
      setTimeout(function () {
        $("header").addClass("dis");
      }, 300);
    }
  });


  setTimeout(function () {
    $(".obscurer").addClass("close");
  }, 800),

  $("#resp-menu-activator").on("click", function () {
    $("#site-header").toggleClass("resp-out");
    $(".hamburger").toggleClass("is-active");
  });

  $("#site-header nav ul li a").on("click", function () {
    setTimeout(function () {
      $("#site-header").toggleClass("resp-out");
      $(".hamburger").toggleClass("is-active");
    }, 500);
  });


  //footer video

  $('#video2-play3').click(function(){
     $('#video2').addClass('in');
   });

 $('#close-video2').click(function(){
   $('#video2').removeClass('in');
 });

  $(window).on("scroll", function () {
    scrollPosition = $(this).scrollTop();
    if (scrollPosition >= 30) {
      $("header").addClass("filled");
    } else {
      $("header").removeClass("filled");
    }
  });
});
