<?php 

/* Template Name: About us
*/
get_header();
?>
<?php
	/****************** START GETTING DATA FROM CUSTOM FIELD ABOUT BANNER IMAGE **********************/
		$service=get_post_meta(8,"about_banner_image",true);
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
                        <h1><?php the_field('who_we_are_title',8);?></h1>
                        <?php the_field('who_we_are_content',8);?>
                        <ul id="sidebar" class="banner_nav">
                            <li><a class="active" href="#service">Our services</a></li>
                            <li><a href="#team">Our team</a></li>
                            <li><a href="#process">Our process</a></li>
                        </ul>
                    </div>
                </div>
	<!---------END OF GETTING DATA FROM CUSTOM FIELD WHO WE ARE---------------------->
            </div>
        </div>
    </div>

    <div class="video_play display_block" id="service">
        <!--div class="image_video">
            <img src="<?php //echo esc_url( get_template_directory_uri() ); ?>/images/watch_video.jpg" alt="">
        </div-->
		
        <div class="play-icon animatedParent">
		<div class="container">
            <h2 class="animated fadeInUpShort"><?php the_field("our_services_title",8);?></h2>
        </div></div>
		<video class="" autoplay loop muted poster="<?php echo esc_url( get_template_directory_uri() ); ?>/images/header_banner.jpg">
					
                    <source src="<?php the_field("our_services_video",8);?>" type="video/webm">
                    <source src="<?php the_field("our_services_video",8);?>" type="video/mp4">
                </video>
    </div>
	<?php
		$service=get_post_meta(8,"our_process_image",true);
		$thumb = wp_get_attachment_image_src($service, 'process_img' );
	?>
    <div class="process_cont display_block animatedParent" style="background-image:url('<?php echo $url = $thumb['0'];?>')" id="process" data-appear-top-offset='-300'>
        <div class="container">
            <div class="row">
                <div class="col-sm-5 cntn_process animated fadeInUp">
		<!---------START GETTING DATA FROM CUSTOM FIELD OUR PROCESS---------------------->
                    <h2><?php the_field('our_process_title',8);?></h2>
                    <p><?php the_field('our_process_content',8);?></p>
		<!---------END OF GETTING DATA FROM CUSTOM FIELD OUR PROCESS---------------------->
                    <ul>
		<!---------START GETTING DATA FROM CUSTOM POST PROCESS---------------------->	
					<?php
						// $args = array('post_type' => 'our_process',
									 // 'posts_per_page' => -1,
									 // 'order' => 'ASC');
							// $loop = new WP_Query( $args );
							// while ( $loop->have_posts() ) : $loop->the_post();
					?>
                        <!--<li>
                            <div class="cntn_lft text-center">
                                <div class="img_process"><?php //the_post_thumbnail();?></div>
                                <strong><?php //the_title();?></strong>
                            </div>
                        </li>-->
					<?php
						//endwhile;
					?>
        <!---------END OF GETTING DATA FROM CUSTOM POST PROCESS---------------------->	                
                    </ul>
                </div>
            </div>
        </div>
    </div>


	<!---------START GETTING DATA FROM CUSTOM FIELD COMPANY HISTORY---------------------->
	<?php
		$service=get_post_meta(8,"company_history_image",true);
		$thumb = wp_get_attachment_image_src($service, 'history_img' );
	?>
    <div class="history_cont display_block animatedParent" style="background-image:url('<?php echo $url = $thumb['0'];?>')" data-appear-top-offset='-150' id="team">
        <div class="container ">
            <div class="history_cntnt animated fadeInUp">
                <h2><?php the_field('company_history_title',8);?></h2>
                <p><?php the_field('company_history_content',8);?></p>
            </div>
	<!---------END OF GETTING DATA FROM CUSTOM FIELD COMPANY HISTORY---------------------->
        </div>

    </div>

<?php
get_footer();
?>