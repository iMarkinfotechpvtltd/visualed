(function ($) {

    $.fn.stickySidebar = function (options) {

        var config = $.extend({
            headerSelector: 'header',
            navSelector: '.content_header',
            contentSelector: '#scnd_scrl',
            footerSelector: '.btm-liv',
            sidebarTopMargin: 20,
            footerThreshold: 0
        }, options);

        var fixSidebr = function () {

            var sidebarSelector = $(this);
            var viewportHeight = $(window).height();
            var viewportWidth = $(window).width();
            var documentHeight = $(document).height();
            var headerHeight = $(config.headerSelector).outerHeight();
            var navHeight = $(config.navSelector).outerHeight();
            var sidebarHeight = sidebarSelector.outerHeight();
            var contentHeight = $(config.contentSelector).outerHeight();
            var footerHeight = $(config.footerSelector).outerHeight();
            var scroll_top = $(window).scrollTop();
            var fixPosition = contentHeight - sidebarHeight;
            var breakingPoint1 = headerHeight + navHeight;
            var breakingPoint2 = documentHeight - (sidebarHeight + footerHeight + config.footerThreshold);

            // calculate
            if ((contentHeight > sidebarHeight) && (viewportHeight > sidebarHeight)) {

                if (scroll_top < breakingPoint1) {

                    sidebarSelector.removeClass('sticky');
                    $('header').fadeIn();
                    $('body').removeClass('sticky_hdr');

                } else if ((scroll_top >= breakingPoint1) && (scroll_top < breakingPoint2)) {

                    sidebarSelector.addClass('sticky').fadeIn().css('top', config.sidebarTopMargin);
                    $('header').fadeOut();
                    $('body').addClass('sticky_hdr');
                } else {

                    var negative = breakingPoint2 - scroll_top;
                    sidebarSelector.addClass('sticky').fadeOut();
                    $('header').fadeIn();
                    $('body').removeClass('sticky_hdr');
                }

            }
        };

        return this.each(function () {
            $(window).on('scroll', $.proxy(fixSidebr, this));
            $(window).on('resize', $.proxy(fixSidebr, this))
            $.proxy(fixSidebr, this)();
        });

    };

}(jQuery));