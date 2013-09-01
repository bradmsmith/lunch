<?php

// Get number of campus lunches
$lunch_count = elgg_get_entities(array(
	'types' => 'object',
	'subtype' => 'lunch', 
	'count' => true,
));

$lunch_count_future = elgg_get_entities_from_metadata(array(
	'types' => 'object',
	'subtype' => 'lunch',
	'count' => true,
	'metadata_name_value_pairs' => array(
		'name' => 'date',
		'value' => date('d/m/Y'),
		'operand' => '<='
	), 
));

$params = array(
	'lunch_count' => $lunch_count,
	'lunch_count_future' => $lunch_count_future,
);

$title = "Welcome";
$content = elgg_view('page/index/content', $params);
$sidebar = elgg_view('page/index/sidebar', $params);
$body = elgg_view_layout('one_column', array(
	'content' => $content,
	'sidebar' => $sidebar,
	));

echo elgg_view_page($title, $body);

?>
