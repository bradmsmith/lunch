<?
/**
 *
 */

$lunches = elgg_get_entities(array(
    'type' => 'object',
    'subtype' => 'lunch',
	'container_guid' => $owner->guid,
	'full_view' => FALSE
));

$content = elgg_view_title($title);
foreach($lunches as $lunch) {
	$content .= '<h3><a style="padding: 6px;" href="/view/'.$lunch->guid.'" title="'.$lunch->description.'" class="tooltip"><p>'.$lunch->title.'</a></h3>';
}
echo $content;


?>