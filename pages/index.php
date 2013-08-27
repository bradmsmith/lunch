<?php

// Get number of campus lunches
$count = elgg_get_entities(array(
	'types' => 'object',
	'subtype' => 'lunch', 
	'count' => true,
	));

$params = array('count' => $count);

$title = "Welcome";
$content = elgg_view('page/index', $params);
$body = elgg_view_layout('one_sidebar', array('content' => $content));

echo elgg_view_page($title, $body);

?>
