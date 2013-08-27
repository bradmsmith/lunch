<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>Google Maps Multiple Markers</title>
<script src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyASijUpE9UZ7c_bpzpN1rW4-FEeb5wiYac"
type="text/javascript"></script>
</head>
<body>

<h1>test</h1>
<?php
    // Load array of schools and geocodes from group objects
    $schools = array();
    $groups = elgg_get_entities(array('types' => 'group', 'limit' => false));
    
    foreach($groups as $group) {
        $schools[] = '[\'' . $group->name . '\', ' . $group->geocode[0] .', ' . $group->geocode[1] . '],';
    }
    
    var_dump($schools);
    
    ?>


<div id="map" style="width: 500px; height: 400px;"></div>

<script type="text/javascript">
var schools = [<?php foreach ($schools as $school) { echo $school; }; ?>];

var map = new google.maps.Map(document.getElementById('map'), {
                              zoom: 10,
                              center: new google.maps.LatLng(-33.92, 151.25),
                              mapTypeId: google.maps.MapTypeId.ROADMAP
                              });

var infowindow = new google.maps.InfoWindow();

var marker, i;

for (i = 0; i < schools.length; i++) {
    marker = new google.maps.Marker({
                                    position: new google.maps.LatLng(schools[i][1], schools[i][2]),
                                    map: map
                                    });
    
    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                                    return function() {
                                                    infowindow.setContent(schools[i][0]);
                                                    infowindow.open(map, marker);
                                                    }
                                                    })(marker, i));
}
</script>
</body>
</html>