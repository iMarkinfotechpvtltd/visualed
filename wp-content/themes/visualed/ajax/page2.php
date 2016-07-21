<?php
include('../../../../wp-config.php');
ini_set('display_errors', 'On');
error_reporting(E_ALL);

function get_numerics ($str) 
{
preg_match_all('/\d+/', $str, $matches);
return $matches[0];
}

$id=$_GET['pst'];

$display_count=10;

$offSet=$_GET['page_val1'];

$offSet = ( $offSet - 1 ) * $display_count; 

$offSet1 = $offSet + 10;
$i=1;
$one1 = get_post_meta($id,'inner_images',true);
		$arr1=get_numerics($one1);
		$res=count($arr1);

if($offSet<$res)
{
	$diff = $res - $offSet;
	for($k=1;$k<=$diff;$k++)
	{
		$small_image_url1 = wp_get_attachment_image_src($arr1[$k], 'full');
				if($i==1)
				{
				?>
            <div class="grids col-sm-12">
                <ul class="animatedParent animateOnce">
                    <li class="col-sm-4 padding animated fadeInUp">
                        <a href="<?php echo $small_image_url1[0];?>" data-lightbox="example-set">
                            <div class="img_hover" style="background-image:url(<?php echo $small_image_url1[0];?>)"></div>
                            <!--div class="hover-effect">
                                <strong>James Richardson's new store</strong>
                            </div-->
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
                            <!--div class="hover-effect">
                                <strong>James Richardson's new store</strong>
                            </div-->
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
                            <!--div class="hover-effect">
                                <strong>James Richardson's new store</strong>
                            </div-->
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
                            <!--div class="hover-effect">
                                <strong>James Richardson's new store</strong>
                            </div-->
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
                            <!--div class="hover-effect">
                                <strong>James Richardson's new store</strong>
                            </div-->
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
                            <!--div class="hover-effect">
                                <strong>James Richardson's new store</strong>
                            </div-->
                            <div class="plus"><i class="fa fa-plus" aria-hidden="true"></i></div>
                        </a>
                    </li>
				<?php
				}
				if($i==7)
				{
				?>
                    <li class="col-sm-4 padding animated fadeInRightShort">
                        <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/grid3.jpg" data-lightbox="example-set">
                            <div class="img_hover" style="background-image:url(<?php echo $small_image_url1[0];?>)"></div>
                            <!--div class="hover-effect">
                                <strong>James Richardson's new store</strong>
                            </div-->
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
                            <!--div class="hover-effect">
                                <strong>James Richardson's new store</strong>
                            </div-->
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
                            <!--div class="hover-effect">
                                <strong>James Richardson's new store</strong>
                            </div-->
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
                            <!--div class="hover-effect">
                                <strong>James Richardson's new store</strong>
                            </div-->
                            <div class="plus"><i class="fa fa-plus" aria-hidden="true"></i></div>
                        </a>
                    </li>
                </ul>
            </div>
			<?php
				}
				$i++;
				}
			}
else
{	
if($offSet>$res)
{
	
}
}
if($offSet==$res)
{
	
}