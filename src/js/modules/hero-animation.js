export default function heroAnimation() {
	const IS_SHOWN = 'is-shown',
	      $heroWrapper = $('#js-hero'),
	      $heroEyecatch = $('#js-hero-eyecatch'),
	      $heroPeople = $('#js-hero-people'),
	      $heroTagline = $('#js-hero-tagline'),
	      $heroCTA = $('#js-hero-cta'),
	      $header = $('#js-header');

	$(window).on('load', () => {
	    $heroWrapper.addClass(IS_SHOWN).delay(500).queue((next) => {
	        $heroEyecatch.addClass(IS_SHOWN).delay(1000).queue((next) => {
	            $header.addClass(IS_SHOWN).delay(500).queue((next) => {
	                $heroPeople.addClass(IS_SHOWN).delay(700).queue((next) => {
	                	$heroTagline.addClass(IS_SHOWN).delay(700).queue((next) => {
		                	$heroCTA.addClass(IS_SHOWN);
		                });
	                });
	            });
	        });
	    });
	});
}