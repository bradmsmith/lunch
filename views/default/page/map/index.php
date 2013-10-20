<?php
/**
 * @uses $vars['school_meta']
 * @uses $vars['group_count']
 *
 */
?>


<div class="elgg-head clearfix">
	<h2 class="elgg-heading-main">Campus Lunches</h2>
	<ul class="elgg-menu elgg-menu-title elgg-menu-hz elgg-menu-title-default">
		<?php if (elgg_is_logged_in()	) { ?><li class="elgg-menu-item-add"><a href="/groups/add/" class="elgg-button elgg-button-action">Add your school</a></li> <?php } ?>
	</ul>
</div>

<?php
	// Output schools
	$schools = elgg_get_entities(array(
		'type' => 'group',
		'full_view' => FALSE,
		'limit' => FALSE,
		)
	);
	
	$content = '';
	foreach($schools as $school) {
		$content .= '<li style="background: url('.$school->getIconURL('large').'); background-size: contain; background-repeat: no-repeat; background-position: center"><a href="/groups/profile/'.$school->guid.'"><p>'.$school->name.'</p></a></li>';
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