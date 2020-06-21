import $ from 'jquery';
window.jQuery = $;
window.$ = $;

import initSliders from './modules/init-sliders';
import heroAnimation from './modules/hero-animation';
import toggleMenu from './modules/toggle-menu';
import scrollToElement from './modules/scroll-to-element';

initSliders();
heroAnimation();
toggleMenu();
scrollToElement();