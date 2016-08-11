<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<?php wp_head();?>
    <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery.fullPage.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/animations-ie-fix.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/animations.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/lightbox.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/scroll_custom.css">
<link href='https://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>
	<?php
		if ( is_front_page() ) {
	?>
    <style>
        .no-js #loader {
            display: none;
        }
        
        .js #loader {
            display: block;
            position: absolute;
            left: 100px;
            top: 0;
        }
        
        .se-pre-con {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('http://visualed.imarkclients.com/wp-content/themes/visualed/images/loading-big.gif') center no-repeat #fff;
			overflow: hidden;
        }

        .section {
            overflow: hidden;
        }
        
        #myVideo {
            position: absolute;
            right: 0;
            bottom: 0;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background-size: 100% 100%;
            background-color: black;
            /* in case the video doesn't fit the whole page*/
            background-image: /* our video */
            ;
            background-position: center center;
            background-size: contain;
            object-fit: cover;
            /*cover video background */
            z-index: 3;
        }
        /* Layer with position absolute in order to have it over the video
	* --------------------------------------- */
        
        #section0 .layer {
            position: absolute;
            z-index: 4;
            width: 100%;
            left: 0;
            top: 43%;
        }
        /*solves problem with overflowing video in Mac with Chrome */
        
        #section0 {
            overflow: hidden;
        }
        /* Bottom menu
	* --------------------------------------- */
        
        #infoMenu li a {
            color: #fff;
        }
    </style>
<?php
}
	else
{
?>
<style>
        .no-js #loader {
            display: none;
        }
        
        .js #loader {
            display: block;
            position: absolute;
            left: 100px;
            top: 0;
        }
        
        .se-pre-con {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('http://visualed.imarkclients.com/wp-content/themes/visualed/images/loading-big.gif') center no-repeat #fff;
        overflow: hidden;
		}
</style>
<?php
}
?>
</head>
<?php
if(is_page('spot-it'))
{
?>
	<body class="conatct_us hdr_cng join_us">
<?php
}
?>
<?php
if(is_singular('post'))
{
?>
	<body class="conatct_us hdr_cng join_us">
<?php
}
?>
<?php
if(is_category('category'))
{
?>
	<body class="conatct_us join_us">
<?php
}
?>
<?php
if(is_tax('portfolio_category'))
{
?>
	<body class="conatct_us join_us">
<?php
}
?>
<?php
if(is_singular('portfolio'))
{
?>
	<body class="conatct_us join_us">
<?php
}
?>
<?php
	if( is_page( array('join-us', 'contact','portfolios') ))
	{
?>
<body class="conatct_us join_us">
<?php
	}
	else
	{
		
?>
<body class="conatct_us">
	<?php
	}
?>
<div class="se-pre-con"></div>
    <header class="animatedParent">
        <div class="header_nav">
            <div class="container">
                <div class="row">
                    <div class="animated fadeInDownShort">
                        <div class="col-sm-3 logo">
                            <a href="<?php echo site_url();?>" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png)">
                            </a>
                        </div>
                        <div class="col-sm-8 navigation">
                            <nav>
                                <ul>
									<?php 
										$defaults = array(
										'theme_location'  => '',
										'menu'            => 'header_menu',
										'container'       => '',
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'menu',
										'menu_id'         => '',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '%3$s',
										'depth'           => 0,
										'walker'          => ''
										);

										wp_nav_menu( $defaults ); 
									?>
                                </ul>
                            </nav>
                        </div>
						<div class="responsive-menu">
						<?php echo do_shortcode('[responsive_menu]'); ?>
						</div>
						
                    </div>
                </div>

            </div>
        </div>
    </header>