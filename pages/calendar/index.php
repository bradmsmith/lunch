<?php

// Output calendar page
$title = "Calendar";
$content = elgg_view('page/calendar');
$body = elgg_view_layout('one_column', array('content' => $content));

echo elgg_view_page($title, $body);
?>