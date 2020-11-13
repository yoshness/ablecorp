export default function outlineAnim() {
	// only on front page
	if($('.js-index-page').length > 0) {
		$(window).scroll(function(event) {
			let st = $(this).scrollTop();

			moveOnScroll($('#js-works-outline'), st);
		});

		function moveOnScroll(target, st) {
			let speed = .4;

			let top_of_object = $(target).offset().top;
		    let bottom_of_window = $(window).scrollTop() + $(window).height();

		    // if seen on screen
		    if( bottom_of_window > top_of_object ) {
		        if(target.data('direction') == 'reverse') {
					target.css('transform', `translateX(-${st * speed}px)`);
				}
				else {
					target.css('transform', `translateX(${st * speed}px)`);
				}
		    }
		}
	}
}