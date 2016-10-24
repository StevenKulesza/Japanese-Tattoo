<?php
/**
 * Template Name: About - Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published
 *
 * @package understrap
 */

get_header(); ?>
<div class="feature-image-container border-bottom-line" style="background-image: url('<?php echo get_the_post_thumbnail_url( $post->ID, 'large' ); ?>')">
</div>
<div class="container">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
</div>
<div class="wrapper" id="full-width-page-wrapper">
    
    <div  id="content" class="">
        
	   <div id="primary" class="content-area">

            <main id="main" class="site-main" role="main">
            <div class="container">
                <div class="wrapper">
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'loop-templates/content', 'page' ); ?>

                <?php endwhile; // end of the loop. ?>
                </div>
            </div>
                <div class="section-divider-container">
                    <section class="section-divider">
                        <div class="container">
                        <h1>Matt Greenhalgh: <br><span>Japanese Tattoo In Atlanta Georgia</span></h1>
                        </div>
                    </section>
                </div>
                <div class="container wrapper">
                    <?php echo do_shortcode('[instagram-feed]'); ?>
                </div>

            </main><!-- #main -->
           
	    </div><!-- #primary -->
        
    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<?php get_footer(); ?>