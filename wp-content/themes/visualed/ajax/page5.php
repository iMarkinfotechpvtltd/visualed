<?php
include('../../../../wp-config.php');
?>
<?php
$display_count=4;
$slug_name = $_GET['slg'];
//echo $slug_name;
$offSet=$_GET['page_val1'];

$offSet = ( $offSet - 1 ) * $display_count; 
$i=1;
             $args = array('post_type' => 'post',
						  'posts_per_page' =>$display_count,
						  'order'        => 'DESC',
						  'category_name'  => $slug_name,
						  'offset'        => $offSet
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
						endwhile;