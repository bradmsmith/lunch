<?php 
$container = $vars['entity']->getContainerEntity();
$topic_guid = $vars['entity']->guid;
$relationships = elgg_get_entities_from_relationship(array(
	'relationship' => 'example', 
	'relationship_guid' => $topic_guid,
	'inverse_relationship' => TRUE,
	));

echo elgg_view_title(elgg_view('output/url', array(
	'href' => '/view/' . $vars['entity']->guid,
	'text' => $vars['entity']->title,
	)));
echo elgg_view('output/longtext', array('value' => $vars['entity']->description));
echo elgg_view('output/tags', array('tags' => $vars['entity']->tags));
	
foreach ($relationships as $relationship) {
	echo '<br/>Example: ' . $relationship->title;
}

?>