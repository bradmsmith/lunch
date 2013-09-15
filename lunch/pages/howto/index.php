<?php

$title = "How To";
$content = elgg_view('page/howto/index');
$drawer = elgg_view('page/howto/drawer');
$vars = array('drawer' => $drawer);

$sidebar = "sidebar";

$body = elgg_view_layout('one_column', array(
	'content' => $content,
	'drawer' => $drawer,
));
 
echo elgg_view_page($title, $body, 'default', $vars);

?>