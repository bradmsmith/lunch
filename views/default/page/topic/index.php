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
if (lunchmoderator(false)) {
	// This needs to be updated using elgg_register_menu/title
	$button = '<ul class="elgg-menu elgg-menu-title elgg-menu-hz elgg-menu-title-default"><li class="elgg-menu-item-add"><a href="/topic/add/" class="elgg-button elgg-button-action">Add topic</a></li></ul>';
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
	$content .= '<li><a href="/"><img src="/topic/icon/'. $topic->guid .'"/><p>'.$topic->title.'</p></a></li>';
}
echo $button . '<ul class="lunch-list">'.$content.'</ul>';

// topic->description


?>