<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400" rel="stylesheet">

<!-- Convert this to scss later... -->
<style>
/*
*
*
*
*
Global Variables
*
*
*
*/
h1,
h2,
h3,
h4,
h5,
h6{
    font-family: 'Roboto Slab', serif;
    font-weight: 300;
    text-transform: uppercase;
}
.text-center{
    text-align: center;
}
.text-left{
    text-align: left;
}
.text-right{
    text-align: right;
}
.border-line{
    width: 100%;
    height: 1px;
    background: #aa862e url('<?php bloginfo( 'stylesheet_directory' ); ?>/images/borderBG.jpg');
    clear: both;
}
/*
*
*
*
*
Home Bottom Nav Bar (home-nav.php)
*
*
*
*/
.home-nav{
    background: #1a1a1a;
    border-top: 1px solid;
    position: absolute;
    bottom: 0;
    width: 100%;
    z-index: 10;
}
.home-nav a{
    color: #fff;
    padding: 15px 10px;
}
.home-nav a h4{
    text-align: center;
    font-weight: 100;
}
.home-nav:before{
    top: -5px;
    background-image: url(<?php bloginfo( 'stylesheet_directory' ); ?>/images/black-edge-top.png);
    content: "";
    position: absolute;
    width: 100%;
    height: 5px;
    background-size: auto 100%;
    background-repeat: repeat;
    left: 0;
    z-index: 5;
}
/*
*
*
*
*
owl carousel (sidebar-hero.php)
*
*
*
*/
.owl-carousel .item {
    height: 100vh;
    padding: 1rem;
    width: 100%;
}
.owl-carousel .item.slide1{
    background: url(wp-content/themes/understrap/images/slide1.jpg) 100% 100%;
    background-size: cover;
    -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    background-position: center;
}
.owl-carousel .item.slide2{
    background: url(wp-content/themes/understrap/images/slide2.jpg) 100% 100%;
    background-size: cover;
    -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    background-position: center;
}
.owl-carousel .item.slide3{
    background: url(wp-content/themes/understrap/images/slide3.jpg) 100% 100%;
    background-size: cover;
    -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    background-position: center;
}
.owl-carousel .item.slide4{
    background: url(wp-content/themes/understrap/images/slide4.jpg) 100% 100%;
    background-size: cover;
    -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    background-position: center;
}
.owl-carousel .item.slide5{
    background: url(wp-content/themes/understrap/images/slide5.jpg) 100% 100%;
    background-size: cover;
    -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    background-position: center;
}
.owl-carousel .item.slide6{
    background: url(wp-content/themes/understrap/images/slide6.jpg) 100% 100%;
    background-size: cover;
    -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    background-position: center;
}
.owl-carousel .item.slide7{
    background: url(wp-content/themes/understrap/images/slide7.jpg) 100% 100%;
    background-size: cover;
    -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    background-position: center;
}
.owl-carousel .item.slide8{
    background: url(wp-content/themes/understrap/images/slide8.jpg) 100% 100%;
    background-size: cover;
    -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    background-position: center;
}

.owl-carousel .item h4 {
    color: #FFF;
    font-weight: 400;
    margin-top: 0rem
}
</style>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
    
    <!-- ******************* The Navbar Area ******************* -->
<?php if ( !is_front_page() ) : ?>

   <div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">
	
        <a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content', 'understrap' ); ?></a>

        <nav class="navbar navbar-dark bg-inverse site-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                            

                <div class="container">


                            <div class="navbar-header">

                                <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->

                                  <button class="navbar-toggle hidden-sm-up" type="button" data-toggle="collapse" data-target=".exCollapsingNavbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                                <!-- Your site title as branding in the menu -->
	                                <?php if (!has_custom_logo()) { ?>
		                                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
		                                	<?php bloginfo( 'name' ); ?>
		                                </a>
	                                <?php } else { the_custom_logo(); } ?><!-- end custom logo -->

                            </div>
                            test
                            <!-- The WordPress Menu goes here -->
                            <?php wp_nav_menu(
                                    array(
                                        'theme_location' => 'primary',
                                        'container_class' => 'collapse navbar-toggleable-xs exCollapsingNavbar',
                                        'menu_class' => 'nav navbar-nav',
                                        'fallback_cb' => '',
                                        'menu_id' => 'main-menu',
                                        'walker' => new wp_bootstrap_navwalker()
                                    )
                            ); ?>

                </div> <!-- .container -->
            
        </nav><!-- .site-navigation -->
        
    </div><!-- .wrapper-navbar end -->
    <?php endif ?> 





