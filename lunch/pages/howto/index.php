<?php

$title = "How To";
$content = elgg_view('page/howto/index');
$sidebar = "sidebar";

$body = elgg_view_layout('one_column', array(
	'content' => $content,
));
 
echo elgg_view_page($title, $body);

?>