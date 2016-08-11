<?php 

/* Template Name: home
*/
get_header();
?>
<div id="fullpage">				<?php			/****************** START GETTING DATA FROM CUSTOM FIELD BANNER IMAGE **********************/					$service=get_post_meta(4,"banner_image",true);					$thumb = wp_get_attachment_image_src($service, 'home_banner_img' );						$url = $thumb['0'];			/****************** END OF GETTING DATA FROM CUSTOM FIELD BANNER IMAGE **********************/						?>
        <div class="content_header section fp-auto-heigt fp-section" style="background-image:url(<?php echo $url;?>)" id="section0">
            <div class="video_hp">
                <video class="" autoplay loop muted poster="<?php echo esc_url( get_template_directory_uri() ); ?>/images/header_banner.jpg">
					
                    <source src="<?php the_field("banner_video",4);?>" type="video/webm">
                    <source src="<?php the_field("banner_video",4);?>" type="video/mp4">
                </video>

            </div>
			<div class="inner_hp">
			<div class="container animatedParent">
				<div class="upper_contn animated fadeInDown">	<!---------START GETTING DATA FROM CUSTOM FIELD BANNER TITLE---------------------->
					<h1><?php the_field('banner_title',4);?></h1>
					<h2><?php the_field('banner_subtitle',4);?></h2><!---------START GETTING DATA FROM CUSTOM FIELD BANNER TITLE---------------------->
				</div>
			</div>
			</div>
			</div>
        <div class="who_cont section fp-auto-heigt fp-section" id="section1">
		<div id="particles-js">
    </div>
            <div class="container">
                <div class="row">
                    <div class="animatedParent">
                        <div class="col-sm-4 who_rt animated fadeInLeftShort ">				<!---------START GETTING DATA FROM CUSTOM FIELD WHO WE ARE---------------------->
                            <h2 class=""><?php the_field('who_we_are_title',4);?></h2>
                            <p><?php $summary = get_field('who_we_are_content',4);
							 echo substr($summary, 0, 451);
							?></p>				
                            <a class="custom bg_white" href="<?php echo get_permalink(8);?>"><?php the_field('read_more_button',4);?></a>
                        </div>
                        <div class="col-sm-7 pull-right animated fadeInRightShort img_who">								<?php									$service=get_post_meta(4,"who_we_are_image",true);									$thumb = wp_get_attachment_image_src($service, 'who_img' );									?>
                            <img src="<?php echo $url = $thumb['0'];?>" alt="banner"> </div>				<!---------END OF GETTING DATA FROM CUSTOM FIELD WHO WE ARE---------------------->
                    </div>
                </div>
            </div>
        </div>
        <div class="section fp-auto-heigt fp-section" id="section2">
            <div class="what_cont animatedParent" data-appear-top-offset='-200'>		<!---------START GETTING DATA FROM CUSTOM FIELD WHAT WE DO---------------------->
			<div class="container">
			<div class="row">
				<div class="col-sm-5 what_text text-left">
                <h2 class=" title_islnd animated fadeInShort"><?php the_field('what_we_do_title',4);?></h2>
                <h4 class=" animated fadeInShort"><?php the_field('what_we_do_subtitle',4);?> </h4>
				</div>
				</div>
				</div>
                <div class="container">
                    <div class="row">
                        <div class="pull-left island animated fadeInLeft">								<?php									$service=get_post_meta(4,"what_we_do_img",true);									$thumb = wp_get_attachment_image_src($service, 'island_img' );									?>
                            <img src="<?php echo $url = $thumb['0'];?>" alt="island">
                        </div>
                        <div class="col-sm-5 pull-right animated fadeInRight island_info_top">
                            <div class="island_info">
                                <!--div class="island_inner">
                                    <h3></h3>				
                                    <?php //$summary = get_field('what_we_do_content',4);	
										//echo substr($summary, 0, 464);?>
                                </div-->
								<div class="island_inner">
								<div class="top_island">
                                    <h3><?php the_field('what_we_do_content_title',4);?></h3>				
                                    <?php the_field('what_we_do_content',4);?>
									</div>
									<div class="btm_cntnt">
									<p><?php $summary=get_field('what_we_do_content_2',4);
									echo substr($summary, 0, 464);?>									<!---------END OF GETTING DATA FROM CUSTOM FIELD WHAT WE DO---------------------->
																	</p></div></div>
                                <!--div class="island_btn">
                                    <a class="" href="">AND MORE</a>
                                </div-->
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
         <div class="how_cont section fp-auto-heigt fp-section" id="section3">		 <!---------START GETTING DATA FROM CUSTOM FIELD HOW WE DO---------------------->								<?php									$service=get_post_meta(4,"how_we_banner_image",true);									$thumb = wp_get_attachment_image_src($service, 'how_we_img' );									?>				
            <div class="bg_sctn" style="background-image:url('<?php echo $url = $thumb['0'];?>')"></div>
            <div class="video_hp_hw">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/how_image.jpg" alt="Process">
                <video class="" autoplay loop muted poster="<?php echo esc_url( get_template_directory_uri() ); ?>/images/header_banner.jpg">
                    <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/video/process%20animation%20final.mp4" type="video/webm">
                    <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/video/process%20animation%20final.mp4" type="video/mp4">
                </video>
            </div>
            <div class="cont_hw">
                <div class="container">
                    <div class="row">
                        <div class="animatedParent">
                            <div class="col-sm-12 how_cntn animated fadeInDownShort">				
                                <h2 class=""><?php $summary = get_field('how_we_do_title',4);
								echo substr($summary, 0, 464);?>
								</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cont_hw_mn">
                <div class="container">
                    <div class="row">
                        <div class="animatedParent">
                            <div class="col-sm-12 how_cntn animated fadeInUpShort">
                                <p><?php the_field('how_we_do_title_content',4);?></p>												<!---------END OF GETTING DATA FROM CUSTOM FIELD HOW WE DO---------------------->				
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>		<!---------START GETTING DATA FROM CUSTOM FIELD PROJECT---------------------->				<?php					$service=get_post_meta(4,"project_banner_image",true);					$thumb = wp_get_attachment_image_src($service, 'project_banner' );					?>	
        <div class="project_cont section fp-auto-heigt fp-section" style="background-image:url('<?php echo $url = $thumb['0'];?>')" id="section4">
            <div class="container">
                <div class="row">
                    <div class="animatedParent" data-appear-top-offset='-200'>
                        <div class="col-sm-12 text-center inner_project">
                            <h2 class="animated fadeInDownShort"><?php the_field('projects_',4);?></h2>
                            <a class="custom animated fadeInUpShort" href="<?php echo get_permalink(12);?>"><?php the_field('portfolio_button',4);?></a>			<!--------------END OF GETTING DATA FROM CUSTOM FIELD PROJECT---------------------->
                        </div>
                    </div>
                </div>
            </div>
        </div>		<!---------START GETTING DATA FROM CUSTOM FIELD JOIN OUR TEAM---------------------->				<?php					$service=get_post_meta(4,"contact_image",true);					$thumb = wp_get_attachment_image_src($service, 'contact_img' );					?>	
        <div class="how_cont join_cont section fp-auto-heigt fp-section" style="background-image:url(<?php echo $url = $thumb['0'];?>)" id="section5">
		 <div class=" how_cntn ">
            <div class="container animatedParent">
                <div class="row">
                  <div class="col-sm-12 animated fadeInUpShort"> 
                        <h2 class=""><?php the_field('join_our_team_title',4);?></h2>
                        <p><?php $summary =get_field('join_our_team_content',4);
									echo substr($summary, 0, 450);?></p>
                        <a class="custom bg" href="<?php echo get_permalink(6);?>"><?php the_field('contact_us_button',4);?></a>		<!---------END OF GETTING DATA FROM CUSTOM FIELD JOIN OUR TEAM---------------------->
                    </div>
                    </div>
                </div>
            </div>	</div>
<?php
get_footer();
?>