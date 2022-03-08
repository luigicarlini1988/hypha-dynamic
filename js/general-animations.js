// Thanks to Alex Fox for this awesome: lax v1.2.3 used here for parallax aniamtions

if( /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {



} else {

window.onload = function() {
    lax.setup() // init

    const updateLax = () => {
      lax.update(window.scrollY)
      window.requestAnimationFrame(updateLax)
    }

        window.requestAnimationFrame(updateLax)
}

}


$(window).bind('mousewheel', function(event) {
    if (event.originalEvent.wheelDelta >= 0) {
        $('header').removeClass('dis');
    }


    else {
      setTimeout(function(){
       	$('header').addClass('dis');
      }, 300);

    }
});



$(document).ready(function(){


      //mobile menu activator


      $('#resp-menu-activator').on('click', function() {
        $('#site-header').toggleClass( 'resp-out' );
        $('.hamburger').toggleClass('is-active');
      });

      $('#site-header nav ul li a').on('click', function() {
        setTimeout(function(){
          $('#site-header').toggleClass( 'resp-out' );
          $('.hamburger').toggleClass('is-active');
        }, 500);
      });



        $(window).on('scroll', function() {
              scrollPosition = $(this).scrollTop();
              if (scrollPosition >= 30) {

                  $('header').addClass('filled');

              } else {
                $('header').removeClass('filled');
              }
        });

        //remove loader after ALL images are loaded
        window.addEventListener("load", event => {
        var image = document.querySelector('img');
        var load = image.complete;
          $('.obscurer').addClass('close');
        });


    });
