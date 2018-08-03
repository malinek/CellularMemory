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


  /*$(window).scroll(function() {

    var sPos = $(this).scrollTop();

    

    $(".welcome-image").css({
      'background-position' : 'center '+ sPos/1.5 + 'px'
    });

  
  }); */

 

/* (function() {
            
    var documentEl = $(document),
        parallaxBg = $('.intro-effects');
    
    documentEl.on('scroll', function() {
        var currScrollPos = documentEl.scrollTop();
        parallaxBg.css('background-position', 'center ' + -currScrollPos/1.5 + 'px');
    });
    
   
    
})(); */


if( $(window).width() > 1100 ) {

$(window).scroll(function(e) {
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
  }

}

}); // document ready function
// WRAPPER FOR ALL CONTENT
})(jQuery);
