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



/*
  $('.site-nav li > .sub-menu').parent().hover(function() {
  var submenu = $(this).children('.sub-menu');
  if ( $(submenu).is(':hidden') ) {
    $(submenu).slideDown(500);
  } else {
    $(submenu).slideUp(500);
  }

  });
*/

// WRAPPER FOR ALL CONTENT
})(jQuery);

  
// PARALLAX EFFECT NO JQUERY
//let p = document.getElementsByClassName('parallax')[0];
//window.onscroll = function(){
//  let scrollY = window.scrollY;
//  p.style.backgroundPosition = 'center ' + (scrollY*0.4) + 'px';
  
//};﻿