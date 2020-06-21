import $ from 'jquery';

export default function toggleMenu() {
    const $toggle = $('#js-toggle-menu');

    $toggle.on('click', (e) => {
        $('html, body').toggleClass('is-locked');
        $(e.currentTarget).toggleClass('is-open');

        $('#js-menu').toggleClass('is-shown');
        $('#js-header').toggleClass('is-open');
        $('#js-main-wrapper').toggleClass('is-hidden');
        $('#js-footer').toggleClass('is-hidden');
    });
}