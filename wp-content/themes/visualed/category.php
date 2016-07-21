<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<div class="padding-top">
        <div class="article_cont">
            <div class="filters_main">
                <div class="filters_cont">
                    <div class="container">
                        <ul>
                            <li class="filter_plus">Filters</li>
                            <li><a href="">All</a></li>
                        </ul>

                    </div>
                </div>

                <div class="searc_bar">
                    <div class="container padding">
					<div class="col-sm-6 srch_lft srch_cnt">
                            <div class="tittle_mn">
                                <h2 class="title_searc hover_title">Shows :</h2></div>
                            <ul class="search_cat">
							<?php 
								$i=1;
								$categories=get_categories();
								foreach($categories as $category)
								{
								if($i<=5)
								{
								?>
                                <li><a href="<?php echo get_category_link($category->cat_ID ); ?>"><span></span><p><?php echo $category->name;?></p></a></li>
								<?php
								$i++;
								}
								}
								?>
							</ul>
					</div>	
							
						<div class="col-sm-6 srch_rt srch_cnt">
							<div class="tittle_mn">
                            <h2 class="title_searc hover_title1">Destination :</h2></div>
                        <ul class="search_cat2">
						<?php 
								
								$categories=get_categories();
								foreach($categories as $category =>$v)
								{
									if ($category < 5) continue;
								{
							?>	
							
						<li><a href="<?php echo get_category_link($v->cat_ID ); ?>"><span></span><p><?php echo $v->name;?></p></a></li>
						<?php
						$i++;	
						}
						}
						?>
						</ul>
					</div>
						
					</div>
                </div>
            </div>
 <div class="artcles_top">
                <div class="container-fluid">
					
					<?php
					$i=1;
					$k==1;
					$cat = get_query_var('cat');
					$yourcat = get_category ($cat);
					$slug = $yourcat->slug;
					//echo $slug;
					$args = array('post_type' => 'post',
						  'posts_per_page' => 4,
						  'order'        => 'DESC',
						  'category_name'  => $slug,
						  'offset'        =>  0
						  );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
						
						$src = wp_get_attachment_image_src( get_post_thumbnail_id($loop->ID),'large');
						 
					?>
					
                    <?php if($i%2!=0){ echo '<div class="articles_mn">';}?>
					<?php
						
						if($i%2!=0)
						{
					?>
                        <a href="" class="pull-left">
                            <div class="article_lft">
                                <div class="article_img_mn">
                                    <div class="artcle_img" style="background-image:url('<?php echo $src[0]; ?>')"> </div>
                                    <div class="hover-effect">
                                        <strong><?php the_time('d');?><sup>TH</sup> ,<?php the_time('Y');?></strong>
                                    </div>
                                </div>

                                <div class="article_info">
                                    <!--h5>ARTICLES</h5-->
                                    <div class="title_artcl">
                                        <h2 class="pull-left"><?php the_title();?></h2>
                                        <i class="pull-right">Read More</i>
                                    </div>
                                    <strong><?php the_content();?></strong>


                                </div>
                            </div>
                        </a>
					<?php
						}
						  else
						{
					?>
							<a href="" class="pull-right">
								<div class="article_lft">
									<div class="article_img_mn">
										<div class="artcle_img" style="background-image:url('<?php echo $src[0]; ?>')"> </div>
										<div class="hover-effect">
											<strong>June 12<sup>TH</sup> , 2016</strong>
										</div>
									</div>
									<div class="article_info">
										<!--h5>ARTICLES</h5-->
										<div class="title_artcl">
											<h2 class="pull-left"><?php the_title();?></h2>
											<i class="pull-right">Read More</i></div>
										<strong><?php the_content();?></strong>


									</div>
								</div>
							</a>
				  <?php
						}
						
				  
                    if($i%2==0){ echo '</div>'; }
						$i++;
						$k++;
				?>
				
				<?php
					endwhile;
				?>
					
				</div>
            </div>
			<?php

  
?>
			<?php
				if($k==4){
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
			var slg = "<?php echo $slug;?>";
             //alert(page_val);
            // alert(page_val1);
            jQuery.ajax({
                type: "GET",
                url: "<?php bloginfo('template_url'); ?>/ajax/page5.php",
                data: {
                    page_val1: page_val1,
					slg:slg,
                    format: 'raw'
                },
				 
                success: function (resp) {
                     //alert(resp);
                    if (resp != "") {

                        // jQuery('#result').empty().append(resp)
                        // alert(resp);
						jQuery("#loading_sec").hide();
                        jQuery(resp).insertAfter(jQuery('.container-fluid>div:last')).fadeIn('slow');
                        jQuery('#page_val').val(page_val1);

                    } else if (resp == "") {
						jQuery("#loading_sec").hide();
                        jQuery(".load_more").hide();
                    }
                }
            });

        }
    </script>
<?php
get_footer();
?>