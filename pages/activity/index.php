<?php

$title = "Activity";
$content = elgg_view('page/activity/index');

$body = elgg_view_layout('one_column', array(
	'content' => $content,
));
 
echo elgg_view_page($title, $body, 'default');

?>