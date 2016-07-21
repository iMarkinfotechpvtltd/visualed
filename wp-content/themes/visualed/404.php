<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
    <div class="back_img" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/header_banner.jpg')"></div>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <section class="error-404 not-found">
                <span class="error_numeric ">Error 404</span>
                <h1 class="page-title "><span>Oops!</span> That page can’t be found.</h1>
                <!-- .page-header -->

                <p class=" ">It looks like nothing was found at this location.</p>

                <!-- .page-content -->
            </section>
            <!-- .error-404 -->

        </main>
        <!-- .site-main -->

        <!--?php get_sidebar( 'content-bottom' ); ?-->

    </div>

    <!--?php get_sidebar(); ?-->
    <?php get_footer(); ?>