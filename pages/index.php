<?php

$title = "Welcome";
$content = elgg_view('page/index');
$body = elgg_view_layout('one_sidebar', array('content' => $content));

echo elgg_view_page($title, $body);

?>
