<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
?>


<?php if (!is_front_page()) : ?>
<div class="footer-bottom border-bottom-line">
<div class="wrapper" id="wrapper-footer">
    
    <div class="container">

        <div class="row">

            <div class="col-md-12">
    
                <footer id="colophon" class="site-footer" role="contentinfo">
                
                    <div class="row">
                        <div class="col-sm-3">
                        <h5 class="footer-header">About Us</h5>
                        <p><?php echo get_theme_mod( 'themeslug_about-text' ); ?></p>
                        </div>
                        <div class="col-sm-3">
                        <h5 class="footer-header">Contact Us</h5>
                        <p><?php echo get_theme_mod( 'themeslug_email' ); ?></p>
                        <p><?php echo get_theme_mod( 'themeslug_phone' ); ?></p>
                        </div>
                        <div class="col-sm-3">
                        <h5  class="footer-header">Find Us</h5>
                        <p><?php echo get_theme_mod( 'themeslug_address' ); ?></p>
                        <p><a href="<?php echo get_theme_mod( 'themeslug_google_map' ); ?>">Get Directions</a></p>
                        </div>
                        <div class="col-sm-3">
                        <h5  class="footer-header">Connect With Us</h5>
                        <?php echo get_template_part( 'social' ); ?>
                        </div>
                    </div>
                    
                    

                </footer><!-- #colophon -->

            </div><!--col end -->

        </div><!-- row end -->
        
    </div><!-- container end -->
    
</div><!-- wrapper end -->
    <div class="site-info text-center">
       <p>© 2016 <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> | Built By <a href="stevenkulesza.com" target="_blank">Steven Kulesza</a></p>
    </div>
</div>
<?php endif; ?>

</div><!-- #page -->
<?php wp_footer(); ?>

</body>

<script type="text/javascript">

jQuery('.fadeOut').owlCarousel({
    items: 1,
    animateOut: 'fadeOut',
    loop: true,
    margin: 10,
    autoplay: true
});


jQuery('.article-carousel.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>

</html>
