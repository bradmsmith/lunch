<?php
/**
 * @uses $vars['school_meta']
 * @uses $vars['group_count']
 *
 */
 
	// Output schools
	$schools = elgg_get_entities(array(
		'type' => 'group',
		'full_view' => false,
	));
	
	$content = '';
	foreach($schools as $school) {
		$content .= '<li><a href="/"><img src="'. $school->getIconURL('large').'"/><p>'.$school->name.'</p></a></li>';
	}
	echo '<ul class="lunch-list">'.$content.'</ul>';
?>




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