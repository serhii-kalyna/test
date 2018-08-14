$( document ).ready(function() {
	$("#send").click(
		function(){
			sendAjaxForm('result_form', 'ajax_form', 'send.php');
			return false; 
		}
		);
});

function sendAjaxForm(result_form, ajax_form, url) {
	$.ajax({
		url: url,
		type: "POST",
		dataType: "html",
		data: $("#"+ajax_form).serialize(),
		success: function(response) {
			$('#msg').addClass("success_msg").fadeIn(400).html('Successfully sent data.').fadeOut(1000);
		},
    	error: function(response) { // Данные не отправлены
    		$('#msg').addClass("error_msg").fadeIn(400).html('Error! Data not sent.').fadeOut(1000);
    	}
    });
}