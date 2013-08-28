<?php
/**
 * @uses $vars['school_meta']
 * @uses $vars['group_count']
 *
 */
?>
<script src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyASijUpE9UZ7c_bpzpN1rW4-FEeb5wiYac"
type="text/javascript"></script>

<center><h1>Browse <?php echo $vars['group_count']; ?> schools</h1><br/></center>
<div id="map" style="width: 100%; height: 500px;"></div><br/>

<script type="text/javascript">

var marker, i;
var schools = [<?php echo $vars['school_meta']; ?>];
var bounds = new google.maps.LatLngBounds();
var map = new google.maps.Map(document.getElementById('map'), {
                              zoom: 10,
                              mapTypeId: google.maps.MapTypeId.ROADMAP
                              });
var infowindow = new google.maps.InfoWindow();
for (i = 0; i < schools.length; i++) {
    marker = new google.maps.Marker({
                                    position: new google.maps.LatLng(schools[i][1], schools[i][2]),
                                    map: map
                                    });
    
    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                                    return function() {
                                                    infowindow.setContent(schools[i][0]);
                                                    infowindow.open(map, marker);
                                                    }})(marker, i));
    bounds.extend(marker.position);
    map.fitBounds(bounds);
}
</script>