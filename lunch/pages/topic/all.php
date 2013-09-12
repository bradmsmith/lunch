<?php
/**
 *	List all topics
 * 
 */

$owner = elgg_get_page_owner_entity();

$title = elgg_echo('lunch:topic:all');
elgg_view_title($title, array('class' => 'elgg-heading-main'));

if (!elgg_is_logged_in()) {
	$content = elgg_view('page/topic/visitor');
} else {
	$content = elgg_view('page/topic/index');
}

$body = elgg_view_layout('one_column', array(
	'content' => $content,
));
 
echo elgg_view_page($title, $body);

?>