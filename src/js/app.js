import $ from 'jquery';
window.jQuery = $;
window.$ = $;

import initSliders from './modules/init-sliders';
import heroAnimation from './modules/hero-animation';
import toggleMenu from './modules/toggle-menu';
import scrollToElement from './modules/scroll-to-element';
import scrollActivate from './modules/scroll-activate';
import contactFormActions from './modules/contact-form-actions';
import outlineAnim from './modules/outline-anim';

initSliders();
heroAnimation();
toggleMenu();
scrollToElement();
scrollActivate();
contactFormActions();
outlineAnim();