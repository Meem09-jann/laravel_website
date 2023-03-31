$(document).ready(function() {
	$(".occupation").hide();

	$("#occupation").change(function() {
		//    get selected value
		var value = $(this).val();

		//SHOW OCCUPATION INPUT BOX
		$(".occupation").show();

		//UPDATE PLACEHOLDER ACCORDING TO OCCUPATION VALUE
		if (value === "student") {
			$('#instituteName').attr('placeholder', 'University Name');
			// $(".occupation").show();
			// $(".student").show();
			// $(".jod-holder").hide();
		} else {
			$('#instituteName').attr('placeholder', 'Office Name');
			$(".occupation").show();
			// $(".student").hide();
			// $(".jod-holder").show();
		}
	});
});
