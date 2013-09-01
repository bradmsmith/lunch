<?php

$title = "How To";
$content = elgg_view('page/howto/index');
$sidebar = "sidebar";

$body = elgg_view_layout('one_sidebar', array(
	'content' => $content,
	'sidebar' => $sidebar,
));
 
echo elgg_view_page($title, $body);

?>