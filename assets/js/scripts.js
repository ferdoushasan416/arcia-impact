jQuery(document).ready(function($){ 
  
// Mobile Menu Function Start //
  $('.menu-trigger').click(function() {
    $('.hamburger-menu-wrapper').addClass('isOpen');
  });

  $('.menu-close').click(function() {
    $('.hamburger-menu-wrapper').removeClass('isOpen');
  });
// Mobile Menu Function End //
  
});   

