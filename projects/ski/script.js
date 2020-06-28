$(document).ready(function() {
	// $("a.direction-links").hover(hoverIn(this),hoverOut(this));
	$("a.direction-links").hover(function() {
		console.log("hoverIn");
		$(this).children(".fas").css("background-color", "#598A15");
		$(this).children(".description").css("color", "#598A15");
	},
	function() {
		console.log("hoverOut");
		$(this).children(".fas").css("background-color", "#82C91E");
		$(this).children(".description").css("color", "#82C91E");
	});

});