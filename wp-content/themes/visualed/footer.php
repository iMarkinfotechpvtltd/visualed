<footer>
        <div class="container animatedParent">
            <div class="social_icons ">
                <ul>
                    <li class="animated fadeInLeftShort"><a href="<?php the_field("linkedin",4)?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="<?php the_field("twitter",4)?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li class="animated fadeInRightShort "><a href="<?php the_field("youtube",4)?>" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                </ul>
            </div>	

            <div class="copy_cont animated fadeInDownShort">
				<ul>
                    <li><?php the_field('footer_address',4);?> </li>
                    <li><a href="tel:<?php the_field('footer_tel_1',4);?>">Tel:<?php the_field('footer_tel_1',4);?> </a>,<a href="tel:<?php the_field('footer_tel_2',4);?>"> <?php the_field('footer_tel_2',4);?></a></li>
                    <li>Copyright © <?php the_time('Y'); ?> Visualed. All rights reserved.</li>
                </ul>
                <p>Made by
                    <a target="_blank" href="http://www.imarkinfotech.com/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/im.png" alt="im"></a>
                </p>
            </div>
        </div>
</footer>
<?php
	if ( is_front_page() ) {
?>

    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/polygon.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js "></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.slimscroll.min.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.fullPage.js"></script>
    <script type="text/javascript">
		var windowWidth = jQuery(window).width();
	if(windowWidth>=768){
		jQuery(document).ready(function () {
            jQuery('#fullpage').fullpage({
                verticalCentered: true,
                anchors: ['technology', 'who-we-are', 'what-we-do', 'how-we-do-it', 'portfolio', 'team'],
                scrollBar: true,
                easingcss3: 'cubic-bezier(0.175, 0.885, 0.320, 1.275)',
                scrollOverflow: false,
                navigation: true,
                navigationPosition: 'right'

            });
        });
    }
	
	var windowWidth = jQuery(window).width();
	if(windowWidth<=767){
		jQuery(document).ready(function () {
            jQuery('#fullpage').fullpage({
                verticalCentered: true,
                anchors: ['technology', 'who-we-are', 'what-we-do', 'how-we-do-it', 'portfolio', 'team'],
				responsiveHeight: 10000,
                scrollBar: true,
                easingcss3: 'cubic-bezier(0.175, 0.885, 0.320, 1.275)',
                scrollOverflow: false,
                navigation: true,
                navigationPosition: 'right'

            });
        });
    }
      
    </script>


    <script>
        jQuery(window).load(function () {
            jQuery(".se-pre-con").fadeOut("slow");;
        });
    </script>
    <script>
        jQuery(window).scroll(function () {

            if (jQuery(this).scrollTop() > 0) {
                jQuery('header').addClass('off-canvas');
            } else {
                jQuery('header').removeClass('off-canvas');
            }
			
        });
    </script>


	<script>
		var windowWidth = jQuery(window).width();
	if(windowWidth<=1199){
		jQuery('.video_hp_hw').insertAfter('.cont_hw_mn');
    }
	if(windowWidth<=767){
		jQuery('.island').insertAfter('.island_info_top');
    }
	
	</script>

    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/css3-animate-it.js"></script>
		 <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/particles.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/particles_polygon.js"></script>
<?php
}
	else
{
?>
	<?php wp_footer();?>
	
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/particles.css">
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js "></script>-->
	  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/mCustomScrollbarconcatmin.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/lightbox-plus-jquery.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js "></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/boot_filestyle.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/stickySidebar.js "></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/smothscrolone.js "></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/smothscroltwo.js "></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/css3-animate-it.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/custom.js"></script>
	 <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/particles.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/particles_inner.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5lightbox.js"></script>
	

  
	
<?php
}
?>

</body>
</html>