<?php 

/* Template Name: join us
*/
get_header();
?>
	<?php
function get_numerics ($str) 
{
preg_match_all('/\d+/', $str, $matches);
return $matches[0];
}
	/****************** START GETTING DATA FROM CUSTOM FIELD ABOUT JOIN US BANNER **********************/
		$service=get_post_meta(14,"joinus_banner_image",true);
		$thumb = wp_get_attachment_image_src($service, 'contact_banner_img' );	
		$url = $thumb['0'];
	?>
 <div class="content_header contact_banner cont_page animatedParent" style="background-image:url(<?php echo $url;?>)">
        <div class="inner_banner_cntct  animated fadeInDown">
		<div class="video_join">
		<video poster="http://visualed.imarkclients.com/wp-content/themes/visualed/images/header_banner.jpg" muted="" loop="" autoplay="" class="">
					
                    <source type="video/webm" src="<?php the_field("joinus_banner_video",14);?>"></source>
                    <source type="video/mp4" src="<?php the_field("joinus_banner_video",14);?>"></source>
         </video></div>
            <div class="container">
                <div class="display_table">
                    <div class="upper_contn text-center">
                        <h1><?php the_field('banner_title',14);?></h1>
                        <p><?php the_field('banner_subtitle',14);?></p>
                    </div>
	<!----------------- END OF GETTING DATA FROM CUSTOM FIELD ABOUT JOIN US BANNER ------------------------->
                </div>
            </div>
        </div>
    </div>
	<?php
			$service=get_post_meta(14,"current_opening_image",true);
			$thumb = wp_get_attachment_image_src($service, 'opening_image' );
		?>
    <div class="crnt_tabs display_block animatedParent" style="background-image:url('<?php echo $url = $thumb['0'];?>')">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 upper_contact animated fadeInLeft">
                    <h4><?php the_field('current_opening_left_title',14);?></h4>
                    <p><?php the_field('current_opening_left_content',14);?></p>
                    <h5><?php the_field('current_opening_left_subtitle',14);?></h5>
                    
                </div>
                <div class="col-sm-7 crnt_tabs_mn animated fadeInRight">
				<div class="crnt_tabs_rt">
                    <h3><?php the_field('current_opening_right_heading',14);?></h3>
	<!-----------------END OF GETTING DATA FROM CUSTOM FIELD ABOUT CURRENT OPENING------------------------->
	<div class="content mCustomScrollbar">
                    <ul>
						<?php
							$args = array('post_type' => 'current_openings',
							'posts_per_page' => -1,
							 'order' => 'DESC');
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post();
						?>
					
                        <li>
						<?php $sub=get_the_title();?>
                            <button type="button" class="qq" data-toggle="modal" data-target="#myModal"><?php the_title();?>
                                <div class="buton-join pull-right">
                                    <strong>Apply</strong>
                                </div>
							<input type="hidden" id="title" value="<?php echo $sub?>">	
                            </button>
                        </li>
                        <?php
							endwhile;
						?>
                    </ul>
                </div>
                </div>
            </div>
            </div>
        </div>

    </div>
   <!-- <div class="contact_cntnt display_block video_cont animatedParent">
        <div class="video pull-right animated fadeInRight">
            <img src="<?php //echo esc_url( get_template_directory_uri() ); ?>/images/video.png" alt="video">
        </div>
        <div class="video_info">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 upper_contact animated fadeInLeft">
	<!-----------------START GETTING DATA FROM CUSTOM FIELD ABOUT WE PROMOTE------------------------->
                        <!--<h4><?php //the_field('we_promote_title',14);?></h4>-->
                        <!--<p><?php //the_field('we_promote_content',14);?>
	<!-----------------START GETTING DATA FROM CUSTOM FIELD ABOUT WE PROMOTE------------------------->
                        <!--</p>-->
                        <!--<a class="custom bg inner_pages" href="<?php //echo get_permalink(6);?>">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <div class="meaningful_cont display_block" data-sequence='500'>
        <div class="container">
            <div class="row">
                <ul class="animatedParent">
						<?php
							$args = array('post_type' => 'work',
							'posts_per_page' => -1,
							 'order' => 'DESC');
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post();
						?>
                    <li class="col-md-3 col-sm-2 animated fadeInUpShort" data-id='1'>
                        <h3><?php the_title();?></h3>
                        <?php the_content();?>
                    </li>
                    <?php
						endwhile;
					?>
                </ul>

            </div>

        </div>

    </div>

    <div class="join_gallery">
        <div class="container-fluid padding">
            <div class="gallery_lft">
                <ul>
				<?php
					$one1 = get_post_meta(14,'gallery_images',true);
					$arr1=get_numerics($one1);
					foreach($arr1 as $val1)
					{
					
					$small_image_url1 = wp_get_attachment_image_src($val1, 'full');
				?>	
                    <li class="col-sm-6 padding"><img src="<?php echo $small_image_url1[0]; ?>" alt=""></li>
				<?php
					}
				?>
               </ul>
            </div>
            <div class="gallery_rt">
			<?php
				$service=get_post_meta(14,"join_image",true);
				$thumb = wp_get_attachment_image_src($service, 'join_img' );
			?>
                <img src="<?php echo $url = $thumb['0'];?>" alt="">
			
            </div>

        </div>

    </div>
	<!-----------------START GETTING DATA FROM CUSTOM FIELD ABOUT CURRENT OPENING------------------------->
		
	<div class="popup">

        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="form_contact">
					
					<?php echo do_shortcode( '[contact-form-7 id="116" title="contact form 2"]' ); ?>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
                    </div>
                </div>

            </div>
        </div>

    </div>
<script>
	jQuery(document).ready(function(){
		var title = jQuery('#title').val();
		jQuery('.qq').click(function(){
			jQuery("input[name='position']").val(title);
		});
});	
		
</script>
<?php
get_footer();
?>