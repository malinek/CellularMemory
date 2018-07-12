// WRAPPER FOR ALL CONTENT
(function($) {

// PARALLAX EFFECT NO JQUERY
//let p = document.getElementsByClassName('parallax')[0];
//window.onscroll = function(){
//  let scrollY = window.scrollY;
//  p.style.backgroundPosition = 'center ' + (scrollY*0.4) + 'px';
  
//};﻿

// NAVBAR


  $(function() {
    $('nav ul li > a:not(:only-child)').click(function(e) {
      $(this).siblings('.nav-dropdown').toggle();
      $('.nav-dropdown').not($(this).siblings()).hide();
      e.stopPropagation();
    });
    $('html').click(function() {
      $('.nav-dropdown').hide();
    });
  });
  document.querySelector('#nav-toggle').addEventListener('click', function() {
    this.classList.toggle('active');
  });
  $('#nav-toggle').click(function() {
    $('nav ul').toggle();
  });


// WRAPPER FOR ALL CONTENT
})(jQuery);

  
