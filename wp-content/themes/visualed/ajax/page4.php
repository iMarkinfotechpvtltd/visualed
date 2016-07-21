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
$args = array(
									
			'post_type' => 'portfolio',
			'posts_per_page' => $display_count,
			'order' => 'DESC',
			'portfolio_category' => $slug_name,
			'offset' =>  $offSet);
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
						endwhile;