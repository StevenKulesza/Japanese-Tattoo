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
