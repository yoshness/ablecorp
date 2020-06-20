import 'slick-carousel';

export default function initSliders() {
	$('#js-works-slider').slick({
		infinite: true,
		speed: 500,
		slidesToShow: 2.5,
		slidesToScroll: 1,
		cssEase: 'ease-out',
		prevArrow: $('#js-works-slider').next().find('.js-slider-prev'),
		nextArrow: $('#js-works-slider').next().find('.js-slider-next')
	});
}