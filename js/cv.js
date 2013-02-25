// Change content div when click on menu item
$("#menu .content a").click(function(event)
{
	var div_show = $(this).attr("data-div");

	$(".hide:visible").stop().slideUp(1000, function()
	{
		$(div_show).stop().slideDown(1000)
	});

	$("#menu .content a").removeClass('selected');
	$(this).addClass('selected')

	event.preventDefault();
	return false;
});

// Fade for menu
$("#menu .content a").mouseover(function()
{
	var current_link = $(this);

	$("#menu .content a").not(current_link).stop().animate(
	{
		"opacity": "0.5"
	}, "slow")
}).mouseout(function()
{
	$("#menu .content a").stop().animate(
	{
		"opacity": "1"
	}, "slow")
});

$(document).ready(function()
{
	// Fade in when page load
	$("#gray_bg").fadeIn(2000);
	$('#header').delay(400).fadeIn(1600);
	$("#menu").delay(500).fadeIn(1500);
	$("#presentation").delay(1000).fadeIn(1500);
	$("#content").delay(2000).fadeIn(1500);
	$("#footer").delay(2000).fadeIn(1500);

	// Track clicks for topbar
	$("#social-networks a span").click(function()
	{
		var classes = $(this).attr("class").split(/\s/);

		// Get last class attribute
		var link = classes[classes.length - 1];

		_gaq.push(['_trackEvent', 'topbar', 'clic', link]);
	});

	// Track clicks for menu
	$("#menu .content a").click(function()
	{
		var title = $(this).attr("title");

		_gaq.push(['_trackEvent', 'CV - menu', 'clic', title]);
	});
});