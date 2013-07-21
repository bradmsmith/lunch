<?php

$title = elgg_echo('lunch:all');

$body = elgg_list_entities(array(
    'type' => 'object',
    'subtype' => 'lunch',
));

$sidebar = "Sidebar content";

$body = elgg_view_layout('one_sidebar', array(
	'content' => $body,
	'sidebar' => $sidebar,
));
 
echo elgg_view_page($title, $body);

?>