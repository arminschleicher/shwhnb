
function generateMailFromForm(form) {
	var name = form.find("#name").val();
	var company = form.find("#firma").val();
	var phone = form.find("#telefon").val();
	var from = form.find("#from").val();
	var to = form.find("#to").val();
	var subject = form.find("#subject").val()+" "+name;
	var contact_info = 
		"Name: "+name+"\n" +
		"Firma: "+company+"\n" +
		"Telefon: "+phone+"\n" +
		"Email: "+from+"\n";
	var message = form.find("#message").val()+"\n\n"+contact_info;

	var mailData = 
		{ 	to: to,
			from: from, 
			subject: subject, 
			message: message, 
			action: "sendmail"
		};
	return mailData;
}

function sendMail(mailData) {
	var def = $.Deferred();
	$.post( ajaxurl,mailData )
  	.done(function( rspnsdata ) {
    	def.resolve(rspnsdata);
  	});

  	return def.promise();
}

function showStatusInGui(mailStatus) {
	console.log(mailStatus);
	if(mailStatus == "MAIL_SUCCESS") {
		$("#kontaktformular-default").fadeOut(500,function(){
			$("#kontaktformular-status #status").html("Wir haben ihre Nachricht erhalten.<br/>Vielen Dank für Ihr Interesse!");
			$("#kontaktformular-status").fadeIn(1000);
		});
	}
}


$(document).ready(function(){

	$("#testbutton").click(function(){
		showStatusInGui("MAIL_SUCCESS");
	});


	var form_to_validate = $("#contact-form");
	// validate contactform on keyup and submit
	var validator = form_to_validate.validate({
		errorClass: 'errorstatus',
		rules: {
			name: {
				required: true,
				minlength: 5
			},
			from: {
				required: true,
				email: true,
			},
			message: {
				required: true,
				minlength: 30
			}
		},
		messages: {
			name: "Bitte geben Sie ihren Namen ein.",
			email: {
				required: "Bitte geben Sie eine gültige Email Adresse an.",
				minlength: "Bitte geben Sie eine gültige Email Adresse an."
			},
			message: "Bitte geben Sie eine Nachricht ein."
		},
		errorPlacement: function(error, element) {
			element.attr("placeholder", error[0].innerHTML);
		},
		submitHandler: function() {
			var mailData = generateMailFromForm(form_to_validate);
			sendMail(mailData).done(function(mailStatus) {
				showStatusInGui(mailStatus);
			});
		},
		// set this class to error-labels to indicate valid fields
		success: function(label) {
			console.log("success called");
			console.log(label);

		},
		highlight: function(element, errorClass) {
			$(element).addClass(errorClass);
			console.log("highlight called");
			console.log(element);
			console.log(errorClass);
		}
	});
	
	return false;
});