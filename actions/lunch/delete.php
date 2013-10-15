<?php
/**
 * Lunch delete
 *
 **/

$guid = (int) get_input('guid');
$lunch = get_entity($guid);

if (elgg_instanceof($lunch, 'object', 'lunch')) {
	$result = $lunch->delete();
	if ($result)
		system_message(elgg_echo('lunch:message:deleted_post'));
	else
		register_error(elgg_echo('lunch:error:cannot_delete_post'));
} else {
	register_error(elgg_echo('lunch:error:post_not_found'));
}

forward(REFERER);

?>