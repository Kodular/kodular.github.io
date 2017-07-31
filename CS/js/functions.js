$(document).ready(function() {
	// Init Custom Scroll For Main Container
	$(window).on('load', function() {
		$('.main').mCustomScrollbar({
			theme: 'minimal-dark'
		});

		// Loader
		// Hide Loader when page is loaded
		setTimeout(function() {
			$('.loader').fadeOut(1000);
		}, 500);

		setTimeout(function() {
			$('body').addClass('loaded');
		}, 1000);
	});

	$(window).on('load resize', function() {
		// Set Height to Main Container
		$('.main').css({
			'height': function() {
				return $(window).height();
			}
		});

		// Set Height to Home Container
		$('.section-home .section-head').css({
			'height': function() {
				return $(window).height() / 2;
			}
		});

		// Update Custom Scrollbar Content
		$('.main').mCustomScrollbar('update');
	});

	// Handle "active" class for Tabs Navigation
	$('#tabs a').click(function (e) {
		e.preventDefault();
		
		$('.main').mCustomScrollbar('scrollTo', 0);

		$(this).tab('show');

		// Animate Skill Meter
		$('.skill-meter').css({
			'width': function() {
				return $(this).attr('data-value') + '%';
			}
		});
		
		$(this).parent().addClass('active')
			.siblings().removeClass('active');
	});

	// Init Countdown
	var $countdown = $('.card-countdown');
	var launchDate = $countdown.attr('data-launch-date');

	$countdown.countdown(launchDate, function(event) {
		$(this).find('.ds').text(event.strftime('%D'));
		$(this).find('.hs').text(event.strftime('%H'));
		$(this).find('.ms').text(event.strftime('%M'));
		$(this).find('.ss').text(event.strftime('%S'));
	});

	// Form Validation
	$('.form-contact').validate({
		submitHandler : function (form) {
			var $form = $(form);
			$.ajax({
				type : $form.attr('method'),
				url : $form.attr('action'),
				dataType : 'json',
				data : $form.serializeArray(),
				success : function (data, status) {
					$form.append($(data));
				},
				error: function(data, status) {
					console.log(data);
				}
			});
		}
	});
});