import $ from 'jquery';
window.jQuery = $;
window.$ = $;

import initSliders from './modules/init-sliders';
import heroAnimation from './modules/hero-animation';
import toggleMenu from './modules/toggle-menu';
import scrollToElement from './modules/scroll-to-element';
import scrollActivate from './modules/scroll-activate';

initSliders();
heroAnimation();
toggleMenu();
scrollToElement();
scrollActivate();