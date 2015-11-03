
$(document).ready(function() {

$(".recProduct").imageLens();

	$('input').iCheck({
		checkboxClass : 'customCheck',
	});

	/***PROGRESS BUTTONS***/

	$(".never").on("click", function() {
		$(this).addClass("active");
		$(this).siblings(".progress").removeClass("active");
	});

	$(".progress").on("click", function() {

		var current = $(this).index();

		$(this).parent().find(".progress").each(function() {
			if ($(this).index() <= current) {
				$(this).addClass("active");
			} else {
				if ($(this).index() >= current) {
					$(this).removeClass("active");
				}
			}
			$(this).siblings(".never").removeClass("active");
		});
	});

	/***POPUPS DE LA SECCION ROUTINE***/

	$(".closeButton").click(function() {
		$(this).parent().removeClass("active");
	});

	$(".routine-selector-wrapper .routine").click(function() {
		var $in = $(this).index();

		if ($(".routine-popups .infoBox.active").length > 0) {
			return false;
		} else {

			$(".routine-popups .infoBox").eq($in).addClass("active");
		}

	});

	$(".sideButton").on("click", function() {
		$(".sideButton").removeClass("active");
		var current = $(this).index();
		$(this).addClass("active");
		$(".idIcon").removeClass("active");
		$(".idIcon").each(function() {
			if ($(this).index() == current) {
				$(this).addClass("active");
			}
		});
		$(".idText").removeClass("active");
		$(".idText").each(function() {
			if ($(this).index() == current) {
				$(this).addClass("active");
			}
		});
	});

	/***SECTION END INFO AND RELOAD***/

	$(".endInfo").on("click", function() {
		var box = $(".section-end .infoBox");
		box.addClass("active");
		switch($(this).attr("id")) {
			case "ei1":
				box.css("left", "200px");
				break;
			case "ei2":
				box.css("left", "450px");
				break;
			case "ei3":
				box.css("left", "265px");
				break;
		}
	});

	$(".endAlt").on("click", function() {
		var switching;
		switch($(this).attr("id")) {
			case "ea1":
				switching = $("#product1");
				break;
			case "ea2":
				switching = $("#product2");
				break;
			case "ea3":
				switching = $("#product3");
				break;
		}
		switching.animate("opacity" ,"0").delay(660).animate("opacity", "1");
		//switching.attr("src", "resources/images/productALT.png");
		//switching.css("opacity" ,"1");
	});

});

/******** COMPORTAMIENTO FLIP CHECKBOXES ********/
