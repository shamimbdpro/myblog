$(function () {
	$("#register-form").validate({
		// Specify the validation rules
		rules: {
			name: "required",
			gender: "required",
			address: "required",
			course: "required",
			day: "required",
			time: "required",
			email: {
				required: true,
				email: true
			},
			phone: {
				required: true,
				minlength: 11,
				maxlength: 18
			}
		},
		// Specify the validation error messages
		messages: {
			name: "Please enter your name",
			gender: "Please select your gender",
			address: "Please select your address",
			course: "Please select your course",
			day: "Please select your preferable day",
			time: "Please select your preferable time",
			email:{
				required: "Please enter a valid email address"
			},
			phone: {
				required: "Please enter phone number",
				minlength: "Your Phone Number Invalid",
				maxlength: "Your Phone Number Invalid"
			}
		},
		submitHandler: function (form) {
			form.submit();
		}
	});
});
