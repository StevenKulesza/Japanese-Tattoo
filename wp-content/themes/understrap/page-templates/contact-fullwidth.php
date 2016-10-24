<?php
/**
 * Template Name: Contact - Full Width Page
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
    <div class="wrapper">  
        <div class="row">
            <div class="col-sm-3">
            <h5 class="footer-header"><i class="fa fa-comments"></i>  Contact Us</h5>
            <p><a href="mailto:<?php echo get_theme_mod( 'themeslug_email' ); ?>"><?php echo get_theme_mod( 'themeslug_email' ); ?></a></p>
            <p><a href="tel:<?php echo get_theme_mod( 'themeslug_phone' ); ?>"><?php echo get_theme_mod( 'themeslug_phone' ); ?></a></p>
            </div>
            <div class="col-sm-3">
            <h5  class="footer-header"><i class="fa fa-map-marker"></i> Find Us</h5>
            <p><?php echo get_theme_mod( 'themeslug_address' ); ?></p>
            </div>
            <div class="col-sm-3">
            <h5  class="footer-header"><i class="fa fa-users"></i> Connect With Us</h5>
            <?php echo get_template_part( 'social' ); ?><br><br>        
            </div>
            <div class="col-sm-3">
                <a class="btn btn-primary btn-sm" target="_blank" href="<?php echo get_theme_mod( 'themeslug_google_map' ); ?>">Get Directions</a>
                <br><br>
                <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Get In Touch</a>
            </div>
        </div>
    </div>
</div>



<div class="" id="full-width-page-wrapper">
    
    <div  id="content" class="">
	    <div id="primary" class="content-area">

            <main id="main" class="site-main" role="main">

                <div class="section-divider-container">
                    <section class="section-divider">
                        <div class="container">
                             <?php while ( have_posts() ) : the_post(); ?>

                                <?php get_template_part( 'loop-templates/content', 'page' ); ?>

                            <?php endwhile; // end of the loop. ?>
                        </div>
                    </section>
                </div>


            </main><!-- #main -->
         
	    </div><!-- #primary -->
        
    </div><!-- Container end -->
    
</div><!-- Wrapper end -->
<?php if (get_theme_mod ( 'themeslug_google_map_embedded') == 'value2'  ) : ?>
            <div id="map"></div>
<?php endif ?>  
<?php get_footer(); ?>