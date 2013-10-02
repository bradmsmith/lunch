<?php 
/**
 * View for individual topic view in list
 * @uses $vars['entity']
 *
 */

$topic_guid = $vars['entity']->guid;

$relationships = elgg_get_entities_from_relationship(array(
	'relationship' => 'example', 
	'relationship_guid' => $topic_guid,
	'inverse_relationship' => TRUE,
	));

?>

<div class="elgg-head clearfix">
	<h2 class="elgg-heading-main"><?php echo $vars['entity']->title; ?></h2>
	<ul class="elgg-menu elgg-menu-title elgg-menu-hz elgg-menu-title-default">
		<li class="elgg-menu-item-add">
			<a href="/topic/edit/150" class="elgg-button elgg-button-action">Edit</a>
		</li>
	</ul>
</div>

<?

echo elgg_view('output/text', array('value' => $vars['entity']->summary));
echo elgg_view('output/longtext', array('value' => $vars['entity']->description));
	
foreach ($relationships as $relationship) {
	$school = elgg_get_entities(array('guids' => $relationship->container_guid));
	echo '<br/>Example: <a href="/groups/' . $school[0]->guid . '/">' . $school[0]->name . '</a>';
}

echo elgg_view_comments($vars['entity']);

?>