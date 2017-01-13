/* --------- SCROLL MENU ---------*/
$(window).scroll(function(){
    var position = $(this).scrollTop();
    if (position > 600) {
        $(".formulario").fadeIn();
    }
    else if (position < 600) {
        $(".formulario").fadeOut();
    } 
});
/* --------- SCROLL MENU ---------*/	
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
   if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        	}, 1000);
        			return false;
      }
    }
  });
});