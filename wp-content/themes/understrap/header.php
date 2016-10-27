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
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
    
    <!-- ******************* The Navbar Area ******************* -->
    <?php get_template_part('home-nav'); ?>






