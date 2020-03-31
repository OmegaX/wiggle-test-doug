jQuery(function($) {

	// scroll to top on page load
	$('html,body').animate({scrollTop:0},300);

	var win = $(window);
	var allMods = $(".module");

	// animation just for show
	allMods.each(function(i, el) {
		var el = $(el);
		if (el.visible(true)) {
			el.addClass("already-visible");
		}
	});

	win.scroll(function(event) {

		allMods.each(function(i, el) {
			var el = $(el);
			if (el.visible(true)) {
				el.addClass("come-in");
			}
		});
	});

	// scroll to form
	$(".show-link").click(function(event) {
		event.preventDefault()
		$("body,html").animate({scrollTop: $(".wiggle__video-form").offset().top
		},300);
	});
});