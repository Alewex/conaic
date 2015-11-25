$(document).ready(function () {
	// Mobile menu
	var menuBtn = $('#menu-btn');
	var menuNav = $('#menu-nav');
	menuBtn.click(function () {
		menuNav.toggle();
	});

	// Swipeshow
	$('.slideshow').swipeshow();
});