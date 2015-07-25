$(document).ready(function() {
	// Smooth scroll
	$('a[href^=#]').bind("click", jump);

	if (location.hash) {
		setTimeout(function() {
			$('html, body').scrollTop(0).show();
			jump();
		}, 0);
	} else {
		$('html, body').show();
	}
});

var jump = function(e) {
	if (e) {
		e.preventDefault();
		var target = $(this).attr("href");
	} else {
		var target = location.hash;
	}

	$('html,body').animate({
		scrollTop: $(target).offset().top - 30
	}, 2000, function() {
		location.hash = target;
	});
}
