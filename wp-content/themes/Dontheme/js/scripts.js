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

  
    var wScroll = $(this).scrollTop();

    if(wScroll > $('.intro-effects-bg-image').offset().top - ($(window).height() / 1.5)) {

      $('.intro-effects-text').each(function() {

      $('.intro-effects-text').addClass('is-showing');

    });
    }

    if(wScroll > $('.button-front-page').offset().top - ($(window).height() / 1)) {

      $('.f-page-button').each(function() {

      $('.f-page-button').addClass('button-scale');

      });

    }

  }

}



/* This is working 

$(window).scroll(function(){

  var wScroll = $(this).scrollTop();

  if(wScroll > $('.intro-effects').offset().top - ($(window).height() / 1.2)) {

    $('.intro-effects-text').each(function() {

    $('.intro-effects-text').addClass('is-showing');

  });
 }

}); 

*/



/* From youtube 
$(window).scroll(function(){

  var wScroll = $(this).scrollTop();

  $('.logo').css({
    'transform' : 'translate(0px, '+ wScroll /2 +'%)'
  });

  $('.back-bird').css({
    'transform' : 'translate(0px, '+ wScroll /4 +'%)'
  });

  $('.fore-bird').css({
    'transform' : 'translate(0px, -'+ wScroll /40 +'%)'
  });

  if(wScroll > $('.clothes-pics').offset().top - ($(window).height() / 1.2)) {

    $('.clothes-pics figure').each(function(i){

      setTimeout(function(){
        $('.clothes-pics figure').eq(i).addClass('is-showing');
      }, 150 * (i+1));
    });

  }

});  end from youtube */


/*if (scroll > $('.intro-effects').offset().top - screenHeight / 1.2) {
      $('.intro-effects-text').function() {

        $('.intro-effects-text').addClass('is-showing');
    }; */


}); // document ready function
// WRAPPER FOR ALL CONTENT
})(jQuery);
