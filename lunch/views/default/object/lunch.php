<?php 
$container = $vars['entity']->getContainerEntity();

echo elgg_view_title($vars['entity']->title);
echo elgg_view('output/longtext', array('value' => $vars['entity']->description));
echo elgg_view('output/tags', array('tags' => $vars['entity']->tags)); 
echo elgg_view('output/longtext', array('value' => $container->name));
echo elgg_view('output/longtext', array('value' => $vars['entity']->attendees));
echo elgg_view('output/longtext', array('value' => $vars['entity']->date));

echo elgg_view_comments($vars['entity']);

?>