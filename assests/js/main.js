$('form.gasp_btn').each(function() {
	var form_id = this.id;
	$('form#' + form_id).on('submit', function() {
		var that = $(this),
			url = that.attr('action'),
			type = that.attr('method'),
			data = {};
		that.find('[name]').each(function() {
			var that = $(this),
				name = that.attr('name'),
				value = that.val();

			data[name] = value;
		});

		$.ajax({
			url: url,
			type: type,
			data: data,
			success: function(response) {
				console.log(response);
				$('.inline-list-' + form_id).append( '<li>' + response + '</li>' );
			}

		});

		return false;
	});
});