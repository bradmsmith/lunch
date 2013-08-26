<?php

/*
 * The lunch plugin is responsible for:
 * 1. Lunch entity
 * 2. Topic entity
 * 3. School entity (extends Group)
 *
 */

function lunch_init() {
	
	// Actions for saving objects
	elgg_register_action("lunch/save", elgg_get_plugins_path() . "lunch/actions/lunch/save.php");
	elgg_register_action("topic/save", elgg_get_plugins_path() . "lunch/actions/topic/save.php");

	// Pages for serving objects
	elgg_register_page_handler('lunch', 'lunch_page_handler');
	elgg_register_page_handler('topic', 'topic_page_handler');
	elgg_register_page_handler('calendar', 'calendar_page_handler');
	
	// Menus
	elgg_register_plugin_hook_handler('register', 'menu:owner_block', 'lunch_owner_block_menu');
	
	// Extending group main page
	elgg_extend_view('groups/tool_latest', 'lunch/group_module');
	
	// Plugin Hooks
	elgg_register_plugin_hook_handler('profile:fields', 'group', 'lunch_school_profile_fields', 1);
}

function lunch_school_profile_fields($hook, $type, $fields, $params) {
	// Adds fields for school address
	return array(
		'street' => 'text',
		'zip' => 'text',
		'briefdescription' => 'text',
		'description' => 'longtext',
		'interests' => 'tags',
	);
}
		
/*
 * Page Handlers
 * 
 */	
function lunch_page_handler($segments) {
    switch ($segments[0]) {
        case 'add':
           include elgg_get_plugins_path() . 'lunch/pages/lunch/add.php';
           break;
        case 'all':
        default:
           include elgg_get_plugins_path() . 'lunch/pages/lunch/all.php';
           break;
    }
    return true;
}

function topic_page_handler($segments) {
    switch ($segments[0]) {
        case 'add':
           include elgg_get_plugins_path() . 'lunch/pages/topic/add.php';
           break;
        case 'all':
        default:
           include elgg_get_plugins_path() . 'lunch/pages/topic/all.php';
           break;
    }
    return true;
}

function calendar_page_handler($segments) {
	include elgg_get_plugins_path() . 'lunch/pages/calendar/index.php';
	return true;
}

/**
 * add menu item to owner block
 */
function lunch_owner_block_menu($hook, $entity_type, $returnvalue, $params){
	$group = elgg_extract("entity", $params);
	if (elgg_instanceof($group, 'group')) {
		$url = '/lunch/group/' . $group->getGUID() . '/all/';
		$item = new ElggMenuItem('lunch', elgg_echo('lunch:menu:lunches'), $url);
		$returnvalue[] = $item;
	}
	
	return $returnvalue;
}

// Probably should store moderator flag in usersettings in future.
function is_lunch_moderator() {
	$username = elgg_get_logged_in_user_entity()->username;
	$moderators = explode(',', elgg_get_plugin_setting('moderators'));
	foreach ($moderators as $moderator) {
		if ($username == trim($moderator))
			return true;
	}
	return false;
}
	
elgg_register_event_handler('init', 'system', 'lunch_init');
	
?>