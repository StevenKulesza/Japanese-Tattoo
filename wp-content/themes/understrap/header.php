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
<?php if(is_page_template('page-templates/contact-fullwidth.php')) : ?>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <script type="text/javascript">
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);
        var myLatlng = new google.maps.LatLng(33.7466244,-84.3745782);
        function init() {
            var mapOptions = {
                zoom: 17,
                disableDefaultUI: true,
                zoomControl: false,
                scrollwheel: false,
                center: myLatlng, // Only You Tattoo
                styles: [{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2e5d4"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#c5dac6"}]},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{"featureType":"road","elementType":"all","stylers":[{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#c5c6c6"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#e4d7c6"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#fbfaf7"}]},{"featureType":"water","elementType":"all","stylers":[{"visibility":"on"},{"color":"#acbcc9"}]}]
            };
            var contentString = '<div style="text-align: center;" id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h4 id="firstHeading" class="firstHeading"><b>Only You Tattoo</b></h4>'+
            '<div id="bodyContent">'+
            '<p><b><?php echo get_theme_mod( 'themeslug_phone' ); ?></b></p>'+
            '<p><b><?php echo get_theme_mod( 'themeslug_address' ); ?></b></p>'+
            '<p><a href="<?php echo get_theme_mod( 'themeslug_google_map' ); ?>">Get Directions On Google Maps</a></p>'+
            '</div>'+
            '</div>';

            var infowindow = new google.maps.InfoWindow({
              content: contentString
            });
            var mapElement = document.getElementById('map');
            var map = new google.maps.Map(mapElement, mapOptions);
            var image = '<?php bloginfo( 'stylesheet_directory' ); ?>/images/map_marker.png';
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: 'Only You Tattoo',
                icon: image
            });
            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });
        }
    </script>
<?php endif ?>
<?php get_template_part('css/style'); ?>
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
.border-top-line{
    border-top: 3px solid #97722e;
}
.border-bottom-line{
  border-bottom: 3px solid #97722e;
}
a{
    -webkit-transition: ease-out 0.5s;
    -moz-transition: ease-out 0.5s;
    -o-transition: ease-out 0.5s;
    transition: ease-out 0.5s;
}
a:hover{
    text-decoration: none;
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
    position: absolute;
    width: 100%;
    z-index: 10;
}
.home-nav.fixed.top{
    position: fixed;
    top: 0;
}
.home-nav.fixed.top:after{
    background-image: url(<?php bloginfo( 'stylesheet_directory' ); ?>/images/black-edge-bottom-light.png);
    content: "";
    position: absolute;
    width: 100%;
    height: 5px;
    background-size: auto 100%;
    background-repeat: repeat;
    left: 0;
    z-index: 5;
    bottom:-5px;
}
.home-nav.bottom{
    bottom: 0;
}
.home-nav.bottom:before,
.footer-bottom:before{
    margin-top: -5px;
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
.home-nav a{
    color: #fff;
    padding: 15px 10px;
}
.home-nav a h4{
    text-align: center;
    font-weight: 100;
}
.home-nav a:hover{
    color:#97722e;
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
.owl-carousel .item h4 {
    color: #FFF;
    font-weight: 400;
    margin-top: 0rem
}
.owl-carousel .overlay {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 3;
}
.owl-carousel .overlay .overlay-inner {
    display: table;
    text-align: center;
    width: 100%;
    height: 100%;
    max-width: 650px;
    margin: 0 auto
}

.owl-carousel .overlay .overlay-inner span {
    display: table-cell;
    vertical-align: middle;
    color: white;
    text-shadow: 0 0 10px black
}

.owl-carousel .overlay .overlay-inner span h1, .owl-carousel .overlay .overlay-inner span h2 {
    padding: 0 10px
}

.owl-carousel .overlay .overlay-inner span h1 {
    font-size: 2.2em;
    line-height: 1.2em;
    margin-bottom: 10px
}

.owl-carousel .overlay .overlay-inner span h2 {
    font-size: 1.1em;
    margin-bottom: 0;
    font-weight: 300;
    line-height: 1.2em
}

.owl-carousel .overlay .overlay-inner span a {
    color: white
}

.owl-carousel .overlay .overlay-inner span a:hover {
    color: #e5e5e5
}

#map{
    width: 100%;
    height: 350px;
}
/*footer*/
.footer-bottom{
    background: #1a1a1a;
    
}
.footer-bottom a, .footer-bottom p{
    color: #fff;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=40)";
    filter: alpha(opacity=50);
    opacity: 0.5;   
}
.feature-image-container{
    height: 400px;
    overflow: hidden;
    background-position: center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    margin-top:80px;
}
h1.entry-title{
    background: #97722e;
    color: #fff;
    display: inline-block;
    padding: 30px 20px 30px 20px;
    margin: -50px 0px 0px;
    font-weight: 600;
    letter-spacing: 3px;
}
</style>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
    
    <!-- ******************* The Navbar Area ******************* -->
    <?php get_template_part('home-nav'); ?>






