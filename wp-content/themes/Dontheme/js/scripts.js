// WRAPPER FOR ALL CONTENT
(function($) {

 $(document).ready(function(){

// NAVBAR

  $('.menu-toggle').click(function() {
    $('.site-nav').toggleClass('site-nav--open', 500);
    $(this).toggleClass('hamburger--open');
  });

  $('.dropdown-button').click(function() {
    $('.sub-menu').toggleClass('sub-menu--open', 500);
  });


// FRONT PAGE BACKGROUND IMAGE PARALLAX

  if( $(window).width() > 1100 ) {

    $(window).scroll(function() {
      parallax();
    })

      function parallax() {
      var scroll = $(window).scrollTop();
      var screenHeight = $(window).height();

      $('.welcome-image').each(function() {
        var offset = $(this).offset().top;
        var distanceFromBottom = offset - scroll - screenHeight
        
        if (offset > screenHeight && offset) {
          $(this).css('background-position', 'center ' + (( distanceFromBottom  ) * 0.5) +'px');
        } else {
          $(this).css('background-position', 'center ' + (( -scroll ) * 0.5) + 'px');
        }
      })

      /*var wScroll = $(window).scrollTop();

      if(wScroll > $('.intro-effects-bg-image').offset().top - ($(window).height() / 1.5)) {

        $('.intro-effects-text').each(function() {

        $('.intro-effects-text').addClass('is-showing');

      });
      }

      if(wScroll > $('.button-front-page').offset().top - ($(window).height() / 1)) {

        $('.f-page-button').each(function() {

        $('.f-page-button').addClass('button-scale');

        });
      } */

}

}

}); // document ready function
// WRAPPER FOR ALL CONTENT
})(jQuery);


