$(document).ready(function() {
	
	// spoiler;

	$(".title-for-block").on("click", function() {
		//$(".unfolding-block").slideUp();
		//$(".title-for-block").removeClass("active");

		$(this).toggleClass("active");
		$(this).next().slideToggle();
	});
});