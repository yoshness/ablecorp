import {TimelineMax, Power2} from 'gsap';
import Splitting from 'splitting';

export default function scrollActivate() {
    const BREAKPOINT_MOBILE = 768;

    const results = Splitting({
        target: '.js-split-image',
        by: 'cells',
        image: true,
        rows: 8,
        columns: 1
    });

    // fade-in-up on scroll
    $(window).on('load, scroll', () => {
        $('.js-scroll-activate').each((i, e) => {
        	let target = e, offset = 0;

            if($(window).width() > BREAKPOINT_MOBILE){
            	if($(target).data('offset') != undefined) {
            		offset = $(target).data('offset');
            	}
            	else {
            		offset = 150;
            	}
            }
            else {
                offset = 150;
            }

            let top_of_object = $(target).offset().top + offset;
            let bottom_of_window = $(window).scrollTop() + $(window).height();

            if( bottom_of_window > top_of_object ){
                $(target).addClass('is-active');

                if($(target).hasClass('js-scroll-activate-split') && !$(target).hasClass('is-split')) {
                    $(target).addClass('is-split');
                    
                    let tl = new TimelineMax();

                    setTimeout(() => {
                        $(target).parent().addClass('is-shown');
                    }, 1000);

                    return tl.staggerFromTo(
                        $(target).find('.cell'),
                        0.5,
                        {
                            x: -400,
                            opacity: 0
                        },
                        {
                            x: 0,
                            opacity: 1,
                            ease: Power2.ease
                        },
                        0.15
                    );
                }
            }
        }); 
    });
}