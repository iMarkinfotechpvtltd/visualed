jQuery(document).ready(function () {

            jQuery('#sidebar').stickySidebar({
                sidebarTopMargin: 00,
                footerThreshold: 00
            });

        });
		
		 jQuery(":file").filestyle({
            input: false
        });
		
		 jQuery(window).scroll(function () {

            if (jQuery(this).scrollTop() > 0) {
                jQuery('header').addClass('off-canvas');
            } else {
                jQuery('header').removeClass('off-canvas');
            }

            if (jQuery(this).scrollTop() > 225) {
                jQuery('.filters_cont').addClass('filters_scroll');
                jQuery('.filters_main').addClass('hover_filters_cont');
                jQuery('.searc_bar').addClass('abc');
            } else {
               jQuery('.filters_cont').removeClass('filters_scroll');
                jQuery('.filters_main').removeClass('hover_filters_cont');
                jQuery('.searc_bar').removeClass('abc');
            }
        });
jQuery(document).ready(function () {
            jQuery('.click_map').click(function () {
               jQuery('.map-iframe').fadeIn('slow');
                jQuery('.image_map').fadeOut('slow');
                jQuery('.cross').fadeIn('slow');
                jQuery('.map_heading').fadeOut('slow');
            });
            jQuery('.cross').click(function () {
                jQuery('.map-iframe').fadeOut('slow');
                jQuery('.image_map').fadeIn('slow');
                jQuery('.cross').fadeOut('slow');
               jQuery('.map_heading').fadeIn('slow');
            });
            jQuery('.hover_title').hover(function () {
                jQuery('.search_cat').toggleClass('hover_effct');
            });
           jQuery('.hover_title1').hover(function () {
                jQuery('.search_cat2').toggleClass('hover_effct');
            });


        });
 jQuery(window).load(function () {
           jQuery(".se-pre-con").fadeOut("slow");;
        });
		
	 jQuery(function () {

            var $window = jQuery(window); //Window object

            var scrollTime = 0.6; //Scroll time
            var scrollDistance = 170; //Distance. Use smaller value for shorter scroll and greater value for longer scroll

            $window.on("mousewheel DOMMouseScroll", function (event) {

                event.preventDefault();

                var delta = event.originalEvent.wheelDelta / 120 || -event.originalEvent.detail / 3;
                var scrollTop = $window.scrollTop();
                var finalScroll = scrollTop - parseInt(delta * scrollDistance);

                TweenMax.to($window, scrollTime, {
                    scrollTo: {
                        y: finalScroll,
                        autoKill: true
                    },
                    ease: Power1.easeOut, //For more easing functions see http://api.greensock.com/js/com/greensock/easing/package-detail.html
                    autoKill: true,
                    overwrite: 5
                });

            });

        });

		

		jQuery(document).ready(function () {
                jQuery(document).on("scroll", onScroll);

                //smoothscroll
                jQuery('a[href^="#"]').on('click', function (e) {
                    e.preventDefault();
                    jQuery(document).off("scroll");

                    jQuery('#sidebar a').each(function () {
                        jQuery(this).removeClass('active');
                    })
                    jQuery(this).addClass('active');

                    var target = this.hash,
                        body = target;
                    $target = jQuery(target);
                    jQuery('html, body').stop().animate({
                        'scrollTop': $target.offset().top - 0
                    }, 1000, 'swing', function () {
                        window.location.hash = target;
                        jQuery(document).on("scroll", onScroll);
                    });
                });
            });

            function onScroll(event) {
                var scrollPos = jQuery(document).scrollTop();
                jQuery('#sidebar li a').each(function () {
                    var currLink = jQuery(this);
                    var refElement = jQuery(currLink.attr("href"));
                    if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                        jQuery('nav ul li a').removeClass("active");
                        currLink.addClass("active");
                    } else {
                        currLink.removeClass("active");
                    }
                });
            }