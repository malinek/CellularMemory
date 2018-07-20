// WRAPPER FOR ALL CONTENT
(function($) {

// PARALLAX EFFECT NO JQUERY
//let p = document.getElementsByClassName('parallax')[0];
//window.onscroll = function(){
//  let scrollY = window.scrollY;
//  p.style.backgroundPosition = 'center ' + (scrollY*0.4) + 'px';
  
//};﻿

// NAVBAR


  $('.menu-toggle').click(function() {
  
  $('.site-nav').toggleClass('site-nav--open', 500);
  $(this).toggleClass('open');
  
  });

 


// WRAPPER FOR ALL CONTENT
})(jQuery);

  
