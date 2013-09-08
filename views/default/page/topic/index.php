<?
/**
 *
 * @todo use $topic->getIconURL()
 */

// Login required
if (!elgg_is_logged_in()) {
	return "Log in to view topics";
	exit;
}



// Display add button for moderators
if (lunch_gatekeeper(false)) {
	// This needs to be updated using elgg_register_menu/title
	$button = '<div class="elgg-head clearfix"><h2 class="elgg-heading-main">Topics</h2><ul class="elgg-menu elgg-menu-title elgg-menu-hz elgg-menu-title-default"><li class="elgg-menu-item-add"><a href="/topic/add/" class="elgg-button elgg-button-action">Add topic</a></li></ul></div>';
}


// Output schools
$topics = elgg_get_entities(array(
	'type' => 'object',
	'subtype' => 'topic',
	'container_guid' => $owner->guid,
	'full_view' => false,
));


$content = '';
foreach($topics as $topic) {
	// Count examples
	$examples = elgg_get_entities_from_relationship(array(
		'relationship' => 'example', 
		'relationship_guid' => $topic->guid,
		'inverse_relationship' => TRUE,
		));
	$content .= '<li style="background: url(/topic/icon/'.$topic->guid.'); background-size: cover"><a style="padding: 6px;" href="/view/'.$topic->guid.'" title="'.$topic->summary.'" class="tooltip"><p>'.$topic->title.'</a> <span style="float: right; color: #AAA">'.count($examples).' lunches</span></p></a></li>';
}
echo $button . '<ul class="lunch-list">'.$content.'</ul>';

// topic->description


?>