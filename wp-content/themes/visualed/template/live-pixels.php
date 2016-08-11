<?php 

/* Template Name: live pixels
*/ 
get_header();
?>
<?php
	/****************** START GETTING DATA FROM CUSTOM FIELD ABOUT BANNER IMAGE **********************/
		$service=get_post_meta(244,"pixels_banner_image",true);
		$thumb = wp_get_attachment_image_src($service, 'about_banner_img' );	
		$url = $thumb['0'];
	/****************** END OF GETTING DATA FROM CUSTOM FIELD ABOUT BANNER IMAGE **********************/	
?>

<div class="content_header contact_banner about_bnr animatedParent" style="background-image:url('<?php echo $url;?>')">
        <div class="inner_banner_cntct animated fadeInDown">
            <div class="container">
                <div class="display_table">
                    <div class="upper_contn text-center">
	<!---------START GETTING DATA FROM CUSTOM FIELD WHO WE ARE---------------------->
                        <h1><?php the_field('pixel_who_we',244);?></h1>
                        <?php the_field('pixel_who_we_content',244);?>
                    </div>
                </div>
	<!---------END OF GETTING DATA FROM CUSTOM FIELD WHO WE ARE---------------------->
            </div>
        </div>
    </div>
	<div id="scnd_scrl">
	 <div class="video_play display_block" id="video1">
        <!--div class="image_video">
            <img src="<?php //echo esc_url( get_template_directory_uri() ); ?>/images/watch_video.jpg" alt="">
        </div-->
		
        <div class="play-icon animatedParent">
		<div class="container">
            <h2 class="animated fadeInUpShort"><?php the_field("pixels_our_services",244);?></h2>
        </div></div>
		<video class="" autoplay loop muted poster="<?php echo esc_url( get_template_directory_uri() ); ?>/images/header_banner.jpg">
					
                    <source src="<?php the_field("pixel_our_services_video",244);?>" type="video/webm">
                    <source src="<?php the_field("pixel_our_services_video",244);?>" type="video/mp4">
                </video>
    </div>
	
	<div class="video_play display_block" id="video2">
        <!--div class="image_video">
            <img src="<?php //echo esc_url( get_template_directory_uri() ); ?>/images/watch_video.jpg" alt="">
        </div-->
		
        <div class="play-icon animatedParent">
		<div class="container">
              <h2 class="animated fadeInUpShort"><?php the_field("pixel_our_services_2",244);?></h2>
        </div></div>
		<video class="" autoplay loop muted poster="<?php echo esc_url( get_template_directory_uri() ); ?>/images/header_banner.jpg">
					
                    <source src="<?php the_field("pixel_our_services_video2",244);?>" type="video/webm">
                    <source src="<?php the_field("pixel_our_services_video2",244);?>" type="video/mp4">
                </video>
    </div>
	<div class="video_play display_block" id="video3">
        <!--div class="image_video">
            <img src="<?php //echo esc_url( get_template_directory_uri() ); ?>/images/watch_video.jpg" alt="">
        </div-->
		
        <div class="play-icon animatedParent">
		<div class="container">
              <h2 class="animated fadeInUpShort"><?php the_field("pixel_our_services_3",244);?></h2>
        </div></div>
		<video class="" autoplay loop muted poster="<?php echo esc_url( get_template_directory_uri() ); ?>/images/header_banner.jpg">
					
                    <source src="<?php the_field("pixel_our_services_video3",244);?>" type="video/webm">
                    <source src="<?php the_field("pixel_our_services_video3",244);?>" type="video/mp4">
                </video>
    </div>
    </div>
	
	<div class="content_header contact_banner about_bnr animatedParent btm-liv" style="background-image:url('<?php echo $url;?>')">
        <div class="inner_banner_cntct animated fadeInDown">
            <div class="container">
                <div class="display_table">
                    <div class="upper_contn text-center">
	<!---------START GETTING DATA FROM CUSTOM FIELD WHO WE ARE---------------------->
                        <h1><?php the_field('pixel_who_we_bottom_title',244);?></h1>
                        <?php the_field('pixel_who_we_bottom_content',244);?>
                    </div>
					<div class="social_live">
					<li><a href="http://instagram.com" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="http://facebook.com" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="<?php echo get_permalink(244);?>"><img src="http://visualed.imarkclients.com/wp-content/themes/visualed/images/live.png" alt=""></a></li>
				</div>
                </div>
				
	<!---------END OF GETTING DATA FROM CUSTOM FIELD WHO WE ARE---------------------->
            </div>
        </div>
    </div>
	
	
	
<?php
get_footer();
?>
