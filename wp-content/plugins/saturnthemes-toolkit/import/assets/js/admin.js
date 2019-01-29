(function ($) {
	var progressTemplate = _.template($('#saturnthemes-import-progress').html()),
		$result = $('#saturnthemes-import-result'),
		importing = false;

	function get_progressbar_element(data) {
		return $result.find('#saturnthemes-import-progress-' + data + ' .saturnthemes-import-progressbar');
	}

	function saturnthemes_import(demo, type, data, step) {
		importing = true;

		$result.parent().addClass('open');

		// Do AJAX
		$.ajax({
			url: ajaxurl,
			type: 'POST',
			dataType: 'json',
			data: {
				action: 'saturnthemes_import',
				demo: demo,
				type: type,
				data: data,
				step: step
			},
			success: function (response) {
				if (typeof response.step != 'undefined') {
					// Display progressbar when the step equals to 1
					if (1 == response.step) {
						var title = 'Importing ' + saturnthemes_import_data.types[data];

						$result.html(progressTemplate({title: title, data: data}));
					}

					var $bar = get_progressbar_element(response.data),
						percent = response.step / response.length * 100;

					$result.find('.saturnthemes-import-progressbar-inner').css('width', percent + '%');

					if ( percent >= 100 ) {
						$bar.addClass('done');
					}
				}

				if (typeof response.next_data == 'undefined') {
					saturnthemes_import(response.demo, response.type, response.data, response.step);
				} else if ('none' != response.next_data) {
					saturnthemes_import(response.demo, response.type, response.next_data, 0);
				} else if ('none' == response.next_data) {
					$('body').trigger('saturnthemes_import_done');
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert("There is a error. Please contact us via email saturnthemes@gmail.com.\r\n" + thrownError + "\r\n" + xhr.responseText);
			}
		});
	}

	window.onbeforeunload = function(evt){
		if ( true == importing ) {
			if (!evt) {
				evt = window.event;
			}

			evt.cancelBubble = true;
			evt.returnValue = 'The importer is running. Please don\'t navigate away from this page.';

			if (evt.stopPropagation) {
				evt.stopPropagation();
				evt.preventDefault();
			}
		}
	};

	$(document).ready(function () {
		var $trigger = $('.saturnthemes-demo-source-install');

		$trigger.on('click', function (evt) {
			evt.preventDefault();

			if (!confirm('Do you want to import this demo?')) {
				return false;
			}

			var $this = $(this);

			$this.addClass('installing').html('Installing...');

			$trigger.prop('disabled', true);

			saturnthemes_import($this.data('demo'), 'all', 'all', 0);
		});

		$('body').on('saturnthemes_import_done', function () {
			importing = false;

			$trigger
				.prop('disabled', false)
				.filter('.installing')
				.html('Install');

			var doneTemplate = _.template($('#saturnthemes-import-done-template').html());
			
			$('#saturnthemes-import-result').html(doneTemplate());

			$('.saturnthemes-import-button-close').on('click', function () {
				$('#saturnthemes-import-result').parent().removeClass('open');

				return false;
			});

			alert('Import is successful!');
		});
	});
})(jQuery);