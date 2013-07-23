<?php

$owner = elgg_get_page_owner_entity();

$title = elgg_echo('lunch:topic:all');

$content = elgg_view_title($title);

$content .= elgg_list_entities(array(
    'type' => 'object',
    'subtype' => 'topic',
	'container_guid' => $owner->guid,
));

$sidebar = "Sidebar content";

$body = elgg_view_layout('one_sidebar', array(
	'content' => $content,
	'sidebar' => $sidebar,
));
 
echo elgg_view_page($title, $body);

?>