( function( $ ) {
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
		var elems = document.querySelectorAll('.carousel');
		var instances = M.Carousel.init(elems,
		{
			fullWidth: false,
			numVisible: 3,
			dist: 0,
			noWrap: false
		});
	  });
	
	
	
	  $('i#prev-materiais').click(function() {
		$('.carousel').carousel('prev');
	});
	
		$('i#next-materiais').click(function() {
		$('.carousel').carousel('next');
	});






}( jQuery ) );



