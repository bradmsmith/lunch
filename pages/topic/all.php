<?php

$owner = elgg_get_page_owner_entity();

$title = elgg_echo('lunch:topic:all');
elgg_view_title($title, array('class' => 'elgg-heading-main'));

// Logged in
if (elgg_is_logged_in()){

	$content = "";
	// Display add button for moderators
	if (lunchmoderator(false)) {
		// This needs to be updated using elgg_register_menu/title
		$content .= '<ul class="elgg-menu elgg-menu-title elgg-menu-hz elgg-menu-title-default"><li class="elgg-menu-item-add"><a href="/topic/add/" class="elgg-button elgg-button-action">Add topic</a></li></ul>';
	}

	$content .= elgg_list_entities(array(
	    'type' => 'object',
	    'subtype' => 'topic',
		'container_guid' => $owner->guid,
		'full_view' => FALSE,
	));
	
	$sidebar = "Sidebar content";
} else {
	// Logged out
	$content = elgg_view('page/topic/index');
	$sidebar = "Sidebar content";
}

$body = elgg_view_layout('one_sidebar', array(
	'content' => $content,
	'sidebar' => $sidebar,
));
 
echo elgg_view_page($title, $body);

?>