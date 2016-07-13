"use strict"

$(document).ready(function() {
	$("#codeup-toggle").click(function() {
		$("#knowledge").animate({
			opacity: "toggle"			
		}, 1000); 
	});
});