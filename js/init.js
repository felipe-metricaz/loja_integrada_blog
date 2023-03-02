( function( $ ) {
	$('.slider').slider({
		'height': 442
	});
	$(".dropdown-trigger").dropdown();
	
	$('.site-search a').click(function(e) {
		e.preventDefault();
		$('.site-search').toggleClass('open');
		var text = $('.site-search i').text();
	    $('.site-search i').text(
	        text == "search" ? "close" : "search");
	});

}( jQuery ) );