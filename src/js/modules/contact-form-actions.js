export default function contactFormActions() {
	const $form 		= $('#js-contact-form'),
		  $viewStep1    = $('#js-contact-form-step1'),
		  $viewStep2    = $('#js-contact-form-step2'),
		  $bottomStep1  = $('#js-contact-bottom-step1'),
		  $bottomStep2  = $('#js-contact-bottom-step2'),
		  $triggerStep1 = $('#js-contact-trigger-form'),
		  $triggerStep2 = $('#js-contact-trigger-confirm'),
		  $countStep2   = $('#js-contact-count-step2'),
		  offset 		= $(window).width() > 768 ? 400 : 500;

	$triggerStep2.click((e) => {
		e.preventDefault();

		validateFields();

		if(flag == false) {
			$viewStep1.hide();
			$viewStep2.show();
			$bottomStep1.hide();
			$bottomStep2.show();
			$countStep2.addClass('is-active');

			$.each($('p[data-source]'), (index, el) => {
				let source = $(el).data('source');
				
				$(el).text($(`.js-contact-input[name='your-${source}']`).val());
			});

			$('html, body').stop().animate({ scrollTop: $viewStep2.offset().top }, 1000);
		}
	});

	$triggerStep1.click((e) => {
		e.preventDefault();

		$viewStep1.show();
		$viewStep2.hide();
		$bottomStep1.show();
		$bottomStep2.hide();
		$countStep2.removeClass('is-active');
	});

	let flag = false;
	function validateFields() {
		$.each($('.js-contact-input-required'), (index, value) => {
			let $el = $(value);

			if(!$el.val()) {
				$el.parent().css('border-color', 'red');
				$('html, body').stop().animate({ scrollTop: $el.offset().top - offset }, 1000);

				flag = true;
				return;
			}
			else {
				if($el.hasClass('js-contact-email')) {
					if(!isEmail($el.val())) {
						$el.parent().css('border-color', 'red');
						$('html, body').stop().animate({ scrollTop: $el.offset().top - offset }, 1000);

						flag = true;
						return;
					}
					else {
						$el.parent().css('border-color', '#bcbcbc');
						flag = false;
					}
				}
				else {
					$el.parent().css('border-color', '#bcbcbc');
					flag = false;
				}
			}
		});
	}

	function isEmail(email) {
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return regex.test(email);
	}

	$('.js-contact-input').keypress(function(event) {
	    if (event.keyCode == 13) {
	        event.preventDefault();
	    }
	});
}