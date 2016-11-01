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
       <p>© 2016 <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> | Built By <a href="http://stevenkulesza.com" target="_blank">Steven Kulesza</a></p>
    </div>
</div>
<?php endif; ?>

</div><!-- #page -->
<?php wp_footer(); ?>

<?php if(is_page_template('page-templates/contact-fullwidth.php')) : ?>
    <?php echo get_template_part( 'modals' ); ?>
<?php endif ?>
</body>

<?php if(is_page_template('page-templates/contact-fullwidth.php')) : ?>
    <?php get_template_part('map'); ?>
<?php endif ?>

<!-- masonary blog ('index.php')-->
<?php if (is_home()) : ?>
<script src="https://unpkg.com/masonry-layout@4.1/dist/masonry.pkgd.min.js"></script>
<script>
// initialize masonary blogroll
var $grid = jQuery('.grid').masonry({
  itemSelector: '.grid-item',
  percentPosition: true,
  columnWidth: '.grid-sizer'
});

// or initialize the article carousel
jQuery('.article-carousel.owl-carousel').owlCarousel({
    stagePadding: 65,
    loop:true,
    margin:10,
    nav:true,
    autoplay: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
</script>
<?php endif ?>

<!-- mobile navbar pop over -->
<script>
/* Mobile Navigation Open */
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}
/* Mobile Navigation Close */
function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}


jQuery('.fadeOut').owlCarousel({
    items: 1,
    animateOut: 'fadeOut',
    loop: true,
    margin: 10,
    lazyLoad:true,
    autoplay: true
});
</script>

</html>
