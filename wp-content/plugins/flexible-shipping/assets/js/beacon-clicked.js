jQuery(function($) {
	$('#wpdesk-helpscout-beacon').on('click', function() {
		$.ajax({
			url: fs_beacon_clicked.ajax_url,
			type: 'POST',
			data: {
				action: fs_beacon_clicked.action,
				nonce: fs_beacon_clicked.nonce,
			},
			dataType: 'json',
		});
	});
});