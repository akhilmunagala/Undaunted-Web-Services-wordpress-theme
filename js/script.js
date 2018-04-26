$(document).ready(function() {
	$(window).scroll(function() {
  	if($(document).scrollTop()) {
    	$('.navbar').addClass('nav-back');
    }
    else {
    $('.navbar').removeClass('nav-back');
    }
  });
});