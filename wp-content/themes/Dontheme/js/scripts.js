// WRAPPER FOR ALL CONTENT
(function($) {

// NAVBAR

  $('.menu-toggle').click(function() {
    $('.site-nav').toggleClass('site-nav--open', 500);
    $(this).toggleClass('hamburger--open');
  });

  $('.dropdown-button').click(function() {
    $('.sub-menu').toggleClass('sub-menu--open', 500);

  });


  $(".myParallax").parallax();


  /*$('.site-nav li > .sub-menu').parent().hover(function() {
  var submenu = $(this).children('.sub-menu');
  if ( $(submenu).is(':hidden') ) {
    $(submenu).slideDown(500);
  } else {
    $(submenu).slideUp(500);
  }

  }); */

  /*$(window).scroll(function(e) {
    parallax();
  })


  function parallax() {
    var scroll = $(window).scrollTop();
    var screenHeight = $(window).height();

    $('.parallax').each(function() {
      var offset = $(this).offset().top;
      var distanceFromBottom = offset - scroll - screenHeight
      
      if (offset > screenHeight && offset) {
        $(this).css('background-position', 'center ' + (( distanceFromBottom  ) * 0.5) +'px');
      } else {
        $(this).css('background-position', 'center ' + (( -scroll ) * 0.5) + 'px');
      }
    })
  } */


// WRAPPER FOR ALL CONTENT
})(jQuery);

  
/* PARALLAX EFFECT NO JQUERY
let p = document.getElementsByClassName('parallax')[0];
window.onscroll = function(){
  let scrollY = (window.scrollY > 70);
  p.style.backgroundPosition = 'center ' + (scrollY*0.4) + 'px';
  
};﻿ */