/*! bigSlide - v0.4.3 - 2014-01-25
 * http://ascott1.github.io/bigSlide.js/
 * Copyright (c) 2014 Adam D. Scott; Licensed MIT */
(function($) {

    $.fn.bigSlide = function(options) {
        'use strict';
        var settings = $.extend({
            'menu': ('#push_panel'),
            'push': ('.push'),
            'side': 'left',
            'left': 'margin-left',
            'menuWidth': '300px',
            'speed': '300',
            'tpl_container': ('.container_24'),
            'menu_icon': ('.menu-link'),
        }, options);

        var menuLink = this,
                menu = $(settings.menu),
                push = $(settings.push),
                container = $(settings.tpl_container),
                menu_icon = $(settings.menu_icon),
                width = settings.menuWidth;

        var positionOffScreen = {
            'position': 'fixed',
            'top': '0',
            'bottom': '0',
            'settings.side': '-' + settings.menuWidth,
            'width': settings.menuWidth,
            'height': '100%'
        };

        var animateSlide = {
            '-webkit-transition': settings.side + ' ' + settings.speed + 'ms ease',
            '-moz-transition': settings.side + ' ' + settings.speed + 'ms ease',
            '-ms-transition': settings.side + ' ' + settings.speed + 'ms ease',
            '-o-transition': settings.side + ' ' + settings.speed + 'ms ease',
            'transition': settings.side + ' ' + settings.speed + 'ms ease'
        };

        var animateMarginSlider = {
            '-webkit-transition': settings.left + ' ' + settings.speed + 'ms ease',
            '-moz-transition': settings.left + ' ' + settings.speed + 'ms ease',
            '-ms-transition': settings.left + ' ' + settings.speed + 'ms ease',
            '-o-transition': settings.left + ' ' + settings.speed + 'ms ease',
            'transition': settings.left + ' ' + settings.speed + 'ms ease'
        };

       menu.css('left', '0');
        push.css(settings.left, settings.menuWidth);
        menu.css(positionOffScreen);
        push.css(animateMarginSlider);
        menu.css(animateSlide);

        

        container.open = function() {
            container.css(settings.left, '25px');
        }

        container.close = function() {
            container.css(settings.left, 'auto');
        }

        menu_icon.open = function() {
            menu_icon.css('right', '-48px');
        }

        menu_icon.close = function() {
            menu_icon.css('right', '5px');
            $('.logo').css('padding-top', '90px');
        }

        container.open();

        menu.open = function() {
            menu._state = 'open';
            menu.css(settings.side, '0');
            push.css(settings.left, width);
            container.open();
        };

        menu.close = function() {
            menu._state = 'closed';
            menu.css(settings.side, '-' + width);
            push.css(settings.left, '0');
            container.close();

        };

        var ua = navigator.userAgent;
        var event = (ua.match(/iPad/i)) ? 'touchstart' : 'click';

        $(menu).trigger(event);

        menuLink.on(event + '.bigSlide', function(e) {
            e.preventDefault();
            var viewPortWidth = $(window).width();
            if (menu._state == 'open') {
                menu.close();
                if (viewPortWidth < 600) {
                    menu_icon.open();
                }
            } else {
                menu.open();
                if (viewPortWidth < 600) {
                    menu_icon.close();
                }
            }

        });

        var detectViewPort = function() {
            var viewPortWidth = $(window).width();
            if (viewPortWidth < 960) {
                menu.css(settings.side, '-' + width);
                push.css(settings.left, '0');
                container.close();
            } else {
                menu.css(settings.side, '0');
                push.css(settings.left, width);
                container.open();
				menu._state = 'open';
            }
        };

        detectViewPort();

        $(window).ready(function() {
            detectViewPort();
        });
//        menuLink.on('touchend', function(e) {
//            menuLink.trigger(event +'.bigSlide');
//            e.preventDefault();
//        });
        return menu;
		};
}(jQuery));
jQuery(document).ready(function() {
    jQuery('.menu-link').bigSlide();
});
