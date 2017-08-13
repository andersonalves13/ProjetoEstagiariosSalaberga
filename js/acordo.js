$(document).ready(function  () {
	$(".acordo h3").eq(2).addClass("active");
	$(".acordo p").eq(2).show();
	$(".acordo h3").click(function  () {
		$(this).next("p").slideToggle("slow")
		.siblings("p:visible").slideDown("slow");
		$(this).toggleClass("active");
		$(this).siblings("h3").addClass("active");

	});
});