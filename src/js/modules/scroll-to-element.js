export default function scrollToElement() {
    const $trigger = $('.js-scroll');

    $trigger.on('click', (e) => {
        // only smooth scroll if in home page, otherwise act as a normal anchor
        if(window.location.pathname == '/') {
            e.preventDefault();

            // if menu item is clicked, close menu first
            if($(e.currentTarget).closest('li').hasClass('menu__item')) {
                $('#js-toggle-menu').click();
            }

            let $target = $($(e.currentTarget).attr('href').replace('/', '')),
                offset = 0;

            if($(e.currentTarget).data('offset') != undefined) {
                offset = $(e.currentTarget).data('offset');
            }

            if($target != '') {
                $('html, body').stop().animate({ scrollTop: $target.offset().top + offset }, 1000);
            }
        }
    });
}