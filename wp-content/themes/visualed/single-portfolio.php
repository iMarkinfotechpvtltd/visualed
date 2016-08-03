<?php
/**

 * The template for displaying all single posts and attachments

 *

 * @package WordPress

 * @subpackage Twenty_Sixteen

 * @since Twenty Sixteen 1.0

 */
	get_header();
	global $post;
?>
<?php
function get_numerics ($str) 
{
preg_match_all('/\d+/', $str, $matches);
return $matches[0];
}
?>
<?php while ( have_posts() ) : the_post();?>
    <div class="temptorary_container display_block">
        <div class="video_portfolio">
            <video class="" autoplay loop muted poster="images/header_banner.jpg">
                <source src="<?php the_field("portfolio_inner_video",$post->ID);?>" type="video/webm">
                <source src="<?php the_field("portfolio_inner_video",$post->ID);?>" type="video/mp4">
            </video>
			<div class="watch_video">
                        <a href="<?php the_field("prtfolio_inner_full_video",$post->ID);?>" class="html5lightbox">
                            Watch the Video
                        </a>
						
             </div>   
        </div>
        <div class="inner_port_cont animatedParent">
            <div class="container">
                <div class="row">
                    <div class="inner_portfolio">
                        <div class="col-sm-6 animated fadeInLeftShort">
						<?php
						$disc=get_post_meta($post->ID,"portfolio_inner_port_image",true);
						$thumb = wp_get_attachment_image_src($disc, 'portfolio_inner_image' );
						?>
                            <img src="<?php echo $url = $thumb[0];?>" alt="">
                        </div>
                        <div class="col-sm-6 animated fadeInRightShort">
                            <h2><?php the_title();?></h2>
                            <div class="inner_para display_block">
                              <p><?php echo wp_trim_words( get_the_content(), 150, '' );?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php endwhile;?>
        <section class="grid-wrap">
					<?php
					$i=1;
					$one1 = get_post_meta(get_the_ID(),'inner_images',true);
					$arr1=get_numerics($one1);
					$res=count($arr1);
					foreach($arr1 as $val1)
					{
					$small_image_url1 = wp_get_attachment_image_src($val1, 'full');
					?>	
					
				<?php
				if($i==1)
				{
				?>
            <div class="grids col-sm-12">
                <ul class="animatedParent animateOnce">
                    <li class="col-sm-4 padding animated fadeInUp">
                        <a href="<?php echo $small_image_url1[0];?>" data-lightbox="example-set">
                            <div class="img_hover" style="background-image:url(<?php echo $small_image_url1[0];?>)"></div>
                            <div class="plus"><i class="fa fa-plus" aria-hidden="true"></i></div>
                        </a>
                    </li>
				<?php
				}
				if($i==2)
				{
				?>
                    <li class="col-sm-4 padding animated fadeInUp">
                        <a href="<?php echo $small_image_url1[0];?>" data-lightbox="example-set">
                            <div class="img_hover" style="background-image:url(<?php echo $small_image_url1[0];?>)"></div>
                            <div class="plus"><i class="fa fa-plus" aria-hidden="true"></i></div>
                        </a>
                    </li>
				<?php
				}
				if($i==3)
				{
				?>
                    <li class="col-sm-4 padding animated fadeInUp">
                        <a href="<?php echo $small_image_url1[0];?>" data-lightbox="example-set">
                            <div class="img_hover" style="background-image:url(<?php echo $small_image_url1[0];?>)"></div>
                            <div class="plus"><i class="fa fa-plus" aria-hidden="true"></i></div>
                        </a>
                    </li>
                </ul>
            </div>
			<?php
				}
				if($i==4)
				{
				?>
            <div class="grids col-sm-12">
                <ul class="animatedParent animateOnce">
                    <li class="col-sm-12 padding animated fadeInUpShort">
                        <a href="<?php echo $small_image_url1[0];?>" data-lightbox="example-set">
                            <div class="img_hover" style="background-image:url(<?php echo $small_image_url1[0];?>)"></div>
                            <div class="plus"><i class="fa fa-plus" aria-hidden="true"></i></div>
                        </a>
                    </li>
                </ul>
            </div>
			<?php
				}
				if($i==5)
				{
				?>
            <div class="grids col-sm-12">
                <ul class="animatedParent animateOnce">
                    <li class="col-sm-4 padding animated fadeInLeftShort">
                        <a href="<?php echo $small_image_url1[0];?>" data-lightbox="example-set">
                            <div class="img_hover" style="background-image:url(<?php echo $small_image_url1[0];?>)"></div>
                            <div class="plus"><i class="fa fa-plus" aria-hidden="true"></i></div>
                        </a>
                    </li>
				<?php
				}
				if($i==6)
				{
				?>
                    <li class="col-sm-4 padding animated fadeInUpShort">
                        <a href="<?php echo $small_image_url1[0];?>" data-lightbox="example-set">
                            <div class="img_hover" style="background-image:url(<?php echo $small_image_url1[0];?>)"></div>
                            <div class="plus"><i class="fa fa-plus" aria-hidden="true"></i></div>
                        </a>
                    </li>
				<?php
				}
				if($i==7)
				{
				?>
                    <li class="col-sm-4 padding animated fadeInRightShort">
                        <a href="<?php echo $small_image_url1[0];?>" data-lightbox="example-set">
                            <div class="img_hover" style="background-image:url(<?php echo $small_image_url1[0];?>)"></div>
                            <div class="plus"><i class="fa fa-plus" aria-hidden="true"></i></div>
                        </a>
                    </li>
                </ul>
            </div>
			<?php
				}
				if($i==8)
				{
				?>
            <div class="grids col-sm-12">
                <ul class="animatedParent animateOnce">
                    <li class="col-sm-6 padding animated fadeInLeftShort">
                        <a href="<?php echo $small_image_url1[0];?>" data-lightbox="example-set">
                            <div class="img_hover" style="background-image:url(<?php echo $small_image_url1[0];?>)"></div>
                            <div class="plus"><i class="fa fa-plus" aria-hidden="true"></i></div>
                        </a>
                    </li>
				<?php
				}
				if($i==9)
				{
				?>
                    <li class="col-sm-6 padding animated fadeInRightShort">
                        <a href="<?php echo $small_image_url1[0];?>" data-lightbox="example-set">
                            <div class="img_hover" style="background-image:url(<?php echo $small_image_url1[0];?>)"></div>
                            <div class="plus"><i class="fa fa-plus" aria-hidden="true"></i></div>
                        </a>
                    </li>
                </ul>
            </div>
			<?php
				}
				if($i==10)
				{
				?>
            <div class="grids col-sm-12">
                <ul class="animatedParent animateOnce">
                    <li class="col-sm-12 padding animated fadeInUpShort">
                        <a href="<?php echo $small_image_url1[0];?>" data-lightbox="example-set">
                            <div class="img_hover" style="background-image:url(<?php echo $small_image_url1[0];?>)"></div>
                            <div class="plus"><i class="fa fa-plus" aria-hidden="true"></i></div>
                        </a>
                    </li>
                </ul>
            </div>
			<?php
				}
				$i++;
			}
			?>
        </section>
		
		<?php
			if($res>10)
			{
		?>
		<div id="loading_sec" style="display:none" align="center">
			<img src="<?php echo  get_template_directory_uri(); ?>/images/gif.gif" id="loader">
		</div>
        <div class="load_more text-center">
		<input type="hidden" name="page_val" id="page_val" value="1">
		 <a class="custom bg bg_grn inner_pages" onclick="pagination();">Load More</a>
        </div>
		<?php
			}
		?>
    </div>
	<script>
        jQuery(document).ready(function () {
            jQuery('#page_val').val();
        });


        function pagination() {
			jQuery('#loading_sec').show();
			jQuery('.load_more').hide();
            var page_val = jQuery('#page_val').val();
            var page_val1 = parseInt(page_val) + 1;
			 var page_val = jQuery('#page_val').val();
			 var pst = "<?php echo get_the_ID();?>";
			 //alert pst;
             //alert(page_val);
             // alert(page_val1);
            jQuery.ajax({
                type: "GET",
                url: "<?php bloginfo('template_url'); ?>/ajax/page2.php",
                data: {
                    page_val1: page_val1,
					pst:pst,
                    format: 'raw'
                },
				 
                success: function (resp) {
                    //alert(resp);
                    if (resp != "") {

                         //jQuery('.animatedParent').empty().append(resp)
                         //alert(resp);
						jQuery("#loading_sec").hide();
                        jQuery(resp).insertAfter(jQuery('.grid-wrap>div:last')).fadeIn('slow');
                        jQuery('#page_val').val(page_val1);

                    } else if (resp == "") {
						jQuery("#loading_sec").hide();
                        jQuery(".load_more").hide();
                    }
                }
            });

        }
    </script>
	<script>
	jQuery(document).ready(function(){
		jQuery('#menu-item-19').addClass('current-menu-item');
	});
	
</script>
<?php get_footer();
?>