export default function scrollToElement() {
    const $trigger = $('.js-scroll');

    $trigger.on('click', (e) => {
	    e.preventDefault();

        // if menu item is clicked, close menu first
        if($(e.currentTarget).closest('li').hasClass('menu__item')) {
            $('#js-toggle-menu').click();
        }

    	let $target = $($(e.currentTarget).attr('href').replace('/', ''));
        if($target != '') {
        	$('html, body').stop().animate({ scrollTop: $target.offset().top }, 1000);
        }
    });
}