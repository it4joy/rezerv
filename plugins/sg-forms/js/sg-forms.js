$(document).ready(function() {
	$('#send_btn').click(function(e) {
		e.preventDefault();
		
		var form_data = $('#order-form').serialize();
		
		$.ajax({
			type: 'POST',
			url: '../includes/sgf-handler.php',
			data: form_data,
			success: function() {
				$('.msg-success').fadeIn().delay(2000).fadeOut();
			},
			error: function() {
				$('.msg-error').fadeIn().delay(2000).fadeOut();
			}
		});
		
		
	});
});