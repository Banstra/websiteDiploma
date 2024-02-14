/** Copyright (c) 2017 Artem Malcov | https://www.pandoge.com/post/411 **/

$(function() { 

	$(".f_input_clean_form").bind("keyup blur", function() {

		var name = $("#name").val();
		var password = $("#password1").val();
		var email = $("#email").val();
		var pattern = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

		if(name == "" || password == "" || email == "") {

			$(".fbutton_clean_form").css({"cursor": "not-allowed"}).prop("disabled", true).attr("title", "Не заполнены обязательные поля");

		} else {

			$(".fbutton_clean_form").css({"cursor": "pointer"}).prop("disabled", false).attr("title", "");

			if(!pattern.test(email)) {

				$(".fbutton_clean_form").css({"cursor": "not-allowed"}).prop("disabled", true).attr("title", "E-mail указан не корректно");

			}

		}

		$("#password2").val(password);

	});

	$(".open_clean_form").on("click", function() {

		$(".clean_form_block").addClass("show_form").css({"visibility": "visible"});
		$("body, html").css({"overflow": "hidden"});
		$(".overlay_clean").animate({scrollTop: 0}, 0);

	});


	$(".close_clean_form").on("click", function() {

		$(".clean_form_block").removeClass("show_form").css({"visibility": "hidden"});
		$("body, html").css({"overflow": "auto"});

	});

}); 