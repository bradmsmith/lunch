<?php
    
// Load array of schools and geocodes from group objects
$schools = "";
$groups = elgg_get_entities(array('types' => 'group', 'limit' => false));
foreach($groups as $group) {
		$infowindow = '<img src="'.$group->getIcon().'"/><a href="'. $group->getURL() .'">'. $group->name.'</a>';
        $schools .= '[\'' . $infowindow . '\', ' . $group->geocode[0] .', ' . $group->geocode[1] . '],';
}

// Output map page
$title = "Map";
$content = elgg_view('page/maps', array('schools' => $schools));
$body = elgg_view_layout('one_column', array('content' => $content));

echo elgg_view_page($title, $body);
?>