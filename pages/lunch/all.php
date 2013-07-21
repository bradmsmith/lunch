<?php

elgg_register_title_button('lunch', 'add');
	
$title = elgg_echo('lunch:all');

$content = elgg_view_title($title);

$content .= elgg_list_entities(array(
    'type' => 'object',
    'subtype' => 'lunch',
));

$sidebar = "Sidebar content";

$body = elgg_view_layout('one_sidebar', array(
	'content' => $content,
	'sidebar' => $sidebar,
));
 
echo elgg_view_page($title, $body);

?>