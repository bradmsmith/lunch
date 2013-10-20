<?php 
$guid = $vars['entity']->guid;
$container = $vars['entity']->getContainerEntity();
$lunch = get_entity($guid);
$url = '/action/lunch/delete?guid=' . $guid;

if (elgg_instanceof($lunch, 'object', 'lunch') && $lunch->canEdit()) {
	echo elgg_view('output/url', array(
		'is_action' => TRUE, 
		'text' => 'Delete', 
		'href' => $url, 
		'class' => 'lunch-delete',
		'onClick' => 'if(confirm(\'Delete?\')) return true; else return false'));
}

echo elgg_view_title($vars['entity']->title);
echo elgg_view('output/longtext', array('value' => $vars['entity']->date));
echo elgg_view('output/longtext', array('value' => $vars['entity']->description));
// echo elgg_view('output/longtext', array('value' => $container->name));
echo elgg_view('output/longtext', array('value' => $vars['entity']->attendees));
echo '<br/>';

// echo elgg_view_comments($vars['entity']);

?>