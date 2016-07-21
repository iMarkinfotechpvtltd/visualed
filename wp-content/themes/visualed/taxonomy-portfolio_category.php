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
<div class="content_header contact_banner cont_page animatedParent">
        <div id="particles-js"></div>
        <div class="inner_banner_cntct portfolio_animatn  animated fadeIn">
            <div class="upper_contn text-center">
                <h1>Portfolio</h1>
                <!--ul>
                            <li><a class="active" href="">LED Screens</a></li>
                            <li><a href="">LED Screens</a></li>
                            <li><a href="">Live Pixels</a></li>
                        </ul-->
            </div>
        </div>
    </div>
    <div class="temptorary_container display_block portfolio_container">
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
								$args = array(
								'type'                     => 'portfolio',
								'orderby'                  => 'term_id',
								'taxonomy'                 => 'portfolio_category',
								);
								$categories = get_categories( $args );
									foreach ( $categories as $category ) 
									{
									if($i<=5)
									{
								?>
                                <li><a href="<?php echo get_category_link( $category->term_id )?>"><span></span><p><?php echo $category->name;?></p></a></li>
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
                        <ul>
						<?php
							$args = array(
								'type'                     => 'portfolio',
								'orderby'                  => 'term_id',
								'taxonomy'                 => 'portfolio_category',
								);
								$categories = get_categories( $args );
									foreach ( $categories as $category=>$v ) 
									{
									if ($category < 5) continue;
									{
						?>
						<li><a href="<?php echo get_category_link( $v->term_id )?>"><span></span><p><?php echo $v->name;?></p></a></li>
						<?php
						}
						}
						?>
                        </ul>
					</div>
                </div>
            </div>
        </div>
 <div class="artcles_top">
            <section class="grid-wrap">
				<?php
					$i=1;
					$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 
					 $slug = $term->slug; 
					// $name = $term->name; 
					// echo $slug;
				?>
						<?php
							$k==1;
						$args = array(
									
									'post_type' => 'portfolio',
									'posts_per_page' => 4,
									'order' => 'DESC',
									'portfolio_category' => $slug,
									'offset' =>  0);
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post();
							$src = wp_get_attachment_image_src( get_post_thumbnail_id($loop->ID),'large');
							
						?>	
						<?php 
						if($i==1)
						{	
						?>
						<div class="grids col-sm-12">
						 <ul class="animatedParent animateOnce">
							<li class="col-sm-4 padding animated fadeInUp">
								<a href="<?php the_permalink();?>">
									<div class="img_hover" style="background-image:url(<?php echo $src[0];?>)"></div>
									<div class="hover-effect">
										<strong><?php the_title();?></strong>
										<small>Lorem Ipsum</small>
									</div>
								</a>
							</li>
						
						<?php
						}
							if($i==2)
						{
						?>
							<li class="col-sm-4 padding animated fadeInUp">
								<a href="<?php the_permalink();?>">
									<div class="img_hover" style="background-image:url(<?php echo $src[0];?>)"></div>
									<div class="hover-effect">
										<strong><?php the_title();?></strong>
										<small>Lorem Ipsum</small>
									</div>
								</a>
							</li>
						<?php
						}
							if($i==3)
						{
						?>
							<li class="col-sm-4 padding animated fadeInUp">
								<a href="<?php the_permalink();?>">
									<div class="img_hover" style="background-image:url(<?php echo $src[0];?>)"></div>
									<div class="hover-effect">
										<strong><?php the_title();?></strong>
										<small>Lorem Ipsum</small>
									</div>
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
                            <a href="<?php the_permalink();?>">
                                <div class="img_hover" style="background-image:url(<?php echo $src[0];?>)"></div>
                                <div class="hover-effect">
                                    <strong><?php the_title();?></strong><small>Lorem Ipsum</small>
                                </div>
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
                           <a href="<?php the_permalink();?>">
                                <div class="img_hover" style="background-image:url(<?php echo $src[0];?>)"></div>
                                <div class="hover-effect">
                                    <strong><?php the_title();?></strong><small>Lorem Ipsum</small>
                                </div>
                            </a>
                        </li>
						<?php
						}
							if($i==6)
						{
						?>
						<li class="col-sm-4 padding animated fadeInUpShort">
							<a href="<?php the_permalink();?>">
                                <div class="img_hover" style="background-image:url(<?php echo $src[0];?>)"></div>
                                <div class="hover-effect">
                                    <strong><?php the_title();?></strong><small>Lorem Ipsum</small>
                                </div>
                            </a>
                        </li>
						<?php
						}
							if($i==7)
						{
						?>
						<li class="col-sm-4 padding animated fadeInRightShort">
							<a href="<?php the_permalink();?>">
                                <div class="img_hover" style="background-image:url(<?php echo $src[0];?>)"></div>
                                <div class="hover-effect">
                                    <strong><?php the_title();?></strong><small>Lorem Ipsum</small>
                                </div>
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
							<a href="<?php the_permalink();?>">
                                <div class="img_hover" style="background-image:url(<?php echo $src[0];?>)"></div>
                                <div class="hover-effect">
                                    <strong><?php the_title();?></strong><small>Lorem Ipsum</small>
                                </div>
                            </a>
                        </li>
						<?php
						}
							if($i==9)
						{
						?>
						<li class="col-sm-6 padding animated fadeInRightShort">
							<a href="<?php the_permalink();?>">
                                <div class="img_hover" style="background-image:url(<?php echo $src[0];?>)"></div>
                                <div class="hover-effect">
                                    <strong><?php the_title();?></strong><small>Lorem Ipsum</small>
                                </div>
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
							<a href="<?php the_permalink();?>">
                                <div class="img_hover" style="background-image:url(<?php echo $src[0];?>)"></div>
                                <div class="hover-effect">
                                    <strong><?php the_title();?></strong><small>Lorem Ipsum</small>
                                </div>
                            </a>
                        </li>
					</ul>
					</div>
						<?php
						}
							$i++;
							$k++;
							endwhile;
						?>
				 </section>
        </div>
			<?php
				if($k==4)
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
			var slg = "<?php echo $slug?>"
             //alert(page_val);
            // alert(page_val1);
            jQuery.ajax({
                type: "GET",
                url: "<?php bloginfo('template_url'); ?>/ajax/page4.php",
                data: {
                    page_val1: page_val1,
					slg:slg,
                    format: 'raw'
                },
				 
                success: function (resp) {
                     alert(resp);
                    if (resp != "") {

                         //jQuery('.animatedParent').empty().append(resp)
                        // alert(resp);
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
<?php
get_footer();
?>