( function( $ ) {
	function isMobile(){
		if(window.matchMedia("(max-width: 600px)").matches){
             return true;
	    }
	    return false;
	}
	$( window ).scroll(function() {
		var navTop = $('.site-header').height();
		if($(this).scrollTop()>=navTop){
			$('.site-header').addClass('fixed');
			$('body').addClass('nav-fixed');
		} else {
			$('.site-header').removeClass('fixed');
			$('body').removeClass('nav-fixed');
		}

	});
	if(!isMobile()){
		$('.col-sidenav').height($('.site-main').height());
		$('.widget-area').stickySidebar({
			topSpacing: 60,
			bottomSpacing: 60
		});
	}
	$('.slider').slider({
		'height': 442
	});
	$(".dropdown-trigger").dropdown();
	$('.sidenav').sidenav();
	
	$('.site-search a').click(function(e) {
		e.preventDefault();
		$('.site-search').toggleClass('open');
		var text = $('.site-search i').text();
	    $('.site-search i').text(
	        text == "search" ? "close" : "search");
	});
	$('#mobile-nav .menu-item-has-children').each(function(index, el) {
		let a = $(el).find('a');
		a.click(function(e) {
			e.preventDefault();
			$(this).parent().toggleClass('open');	
		});
	});



	document.addEventListener('DOMContentLoaded', function() {
		var carousel = document.querySelectorAll('.carousel');
		var instances = M.Carousel.init(carousel,
		{
			fullWidth: false,
			numVisible: 3,
			dist: 0,
			noWrap: false,
			shift: 30
		});
	});
	
	
	
	$('i#prev-materiais').click(function() {
		$('.carousel').carousel('prev');
	});
	
	$('i#next-materiais').click(function() {
		$('.carousel').carousel('next');
	});



	document.addEventListener('DOMContentLoaded', function() {
		var paralax = document.querySelectorAll('.parallax');
		var instances = M.Parallax.init(paralax);
	  });



}( jQuery ) );



