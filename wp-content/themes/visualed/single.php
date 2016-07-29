<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header();
global $post; ?>

    <div class="padding-top">
        <div class="blog_page animatedParent">
            <div class="container">
                <div class="row">
                    <div class="animated fadeInLeft">
                        <div class="blog_lft col-sm-8">
                            <div class="blog_bx">
                                <!--div class="blog_date">
                                <div class="blog_date_innr">
                                    <span>18 <br> Apr</span>
                                </div>
                            </div-->
							<?php while (have_posts()) : the_post();?>
                                <div class="blog_cntnt">
                                    <div class="blog_img">
                                        <?php the_post_thumbnail();?>
                                    </div>
                                    <div class="blog_descp">
                                        <h2><?php the_title();?></h2>
                                        <ul>
                                            <li><a title="" href="#"><i aria-hidden="true" class="fa fa-user"></i><?php the_author();?></a></li>
                                            <li><a title="" href="#"><i aria-hidden="true" class="fa fa-calendar"></i><?php the_time('j F Y');?></a></li>
                                        </ul>
                                        <p><?php the_content();?></p>
                                    </div>
                                </div>
								<?php
								endwhile;?>
                            </div>



                        </div>

                    </div>
                    <div class="animated fadeInRight">
                        <div class="recent_post col-sm-4">
                            <div class="recent_post">
                                <h2>Recent Posts</h2>
                                <ul>
											<?php
												  $args = array('post_type'      => 'post',
												  'posts_per_page' => 4,
												  'order'          => 'DESC'
												  );
												$loop = new WP_Query( $args );
												while ( $loop->have_posts() ) : $loop->the_post();
											?>
                                    <li>
                                        <div class="post_sec">
                                            <div class="post_thumb">
                                                <a title="" href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
                                            </div>
                                            <div class="post_cntnt">
                                                <h4><?php the_time('j F Y');?></h4>
                                                <p><a title="" href="<?php the_permalink();?>"><?php the_title();?></a></p>
                                            </div>
                                        </div>
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
    </div>

    <?php //get_sidebar(); ?>
        <?php get_footer(); ?>