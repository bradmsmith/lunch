<?php
    
// Load array of schools and geocodes from group objects
$schools = "";
$groups = elgg_get_entities(array('types' => 'group', 'limit' => false));
foreach($groups as $group) {
        $schools .= '[\'' . $group->name . '\', ' . $group->geocode[0] .', ' . $group->geocode[1] . '],';
}


$content = <<<CONTENT
    
    <script src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyASijUpE9UZ7c_bpzpN1rW4-FEeb5wiYac"
    type="text/javascript"></script>
    
    <div id="map" style="width: 100%; height: 500px;"></div>
    
    <script type="text/javascript">
    
    var marker, i;
    var schools = [{$schools}];
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

CONTENT;

    
$body = elgg_view_layout('one_column', $content);

echo elgg_view_page($title, $body);
?>