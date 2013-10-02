<?php

$owner = elgg_get_page_owner_entity();

$title = elgg_echo('lunch:all');

$content = elgg_view('page/lunch/index');

$sidebar = "Sidebar content";

$body = elgg_view_layout('one_sidebar', array(
	'content' => $content,
	'sidebar' => $sidebar,
));
 
echo elgg_view_page($title, $body);

?>