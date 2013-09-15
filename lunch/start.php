<?php

/*
 * The lunch plugin is responsible for:
 * 1. Lunch entity
 * 2. Topic entity
 * 3. School entity (extends Group)
 *
 */

function lunch_init() {
	
	/** 
	 * Shared libraries, CSS and JS
	 */
	elgg_register_library('elgg:lunch', elgg_get_plugins_path() . 'lunch/lib/lunch.php');
	elgg_register_library('elgg:lunch:api', elgg_get_plugins_path() . 'lunch/lib/api.php');
	elgg_register_css('fullcalendar', "/mod/lunch/vendors/fullcalendar/fullcalendar.css");
	elgg_register_js('fullcalendar', "/mod/lunch/vendors/fullcalendar/fullcalendar.js");
	elgg_load_library('elgg:lunch:api');

	/**
	 * Action registrations
	 */
	elgg_register_action("lunch/save", elgg_get_plugins_path() . "lunch/actions/lunch/save.php");
	elgg_register_action("topic/save", elgg_get_plugins_path() . "lunch/actions/topic/save.php");

	/**
	 * Page handlers
	 */ 
	elgg_register_page_handler('lunch', 'lunch_page_handler');
	elgg_register_page_handler('topic', 'topic_page_handler');
	elgg_register_page_handler('map', 'map_page_handler');
	elgg_register_page_handler('calendar', 'calendar_page_handler');
	elgg_register_page_handler('howto', 'howto_page_handler');
		
	/**
	 * Plugin hook handlers
	 */
	elgg_register_plugin_hook_handler('register', 'menu:owner_block', 'lunch_owner_block_menu'); // Menus
	elgg_register_plugin_hook_handler('index', 'system', 'lunch_index'); // Override index
	elgg_register_plugin_hook_handler('login', 'lunch', 'lunch_index'); // Override login
	elgg_register_plugin_hook_handler('profile:fields', 'group', 'lunch_school_profile_fields', 1);
    elgg_register_plugin_hook_handler('action', 'groups/edit', 'lunch_address_hook');
	elgg_register_plugin_hook_handler('register', 'user', 'lunch_register_hook');
			
	/**
	 * Extend views
	 */
	elgg_extend_view('groups/tool_latest', 'lunch/group_module');	

}

/*
 * Plugin hook handlers
 */
function lunch_school_profile_fields($hook, $type, $fields, $params) {
	return array(
		'street' => 'text',
		'city' => 'text',
        'geocode' => 'hidden',
		'briefdescription' => 'text',
		'description' => 'longtext',
		'interests' => 'tags',
	);
}
    
// Converts school address to geocode using Google API
function lunch_address_hook($hook, $type, $fields, $params) {
	elgg_load_library('elgg:lunch');
    $street = urlencode(get_input('street'));
    $city = urlencode(get_input('city'));
	$json = lunch_geocode($street . ',+' . $city);
    set_input('geocode', $json['results'][0]['geometry']['location']);
    return true;
}

// Sets username to guid
function lunch_register_hook($hook, $type, $fields, $params) {
	
	// Set username to guid
	$guid = $params['user']->getGUID();
	$user = get_entity($guid);
	$user->__set("username", $guid);
	
	// Set graduation metadata
	$graduation = (int) get_input('graduation');
	$user->graduation = graduation;
	return true;
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
        case 'icon':
			include elgg_get_plugins_path() . 'lunch/pages/topic/icon.php';
			break;
		case 'add':
           	include elgg_get_plugins_path() . 'lunch/pages/topic/add.php';
           	break;
		case 'view':
			include elgg_get_plugins_path() . 'lunch/pages/topic/view.php';
			break;
        case 'all':
        default:
           	include elgg_get_plugins_path() . 'lunch/pages/topic/all.php';
           	break;
    }
    return true;
}

function map_page_handler($segments) {
	include elgg_get_plugins_path() . 'lunch/pages/map/index.php';
	return true;
}

function calendar_page_handler($segments) {
	include elgg_get_plugins_path() . 'lunch/pages/calendar/index.php';
	return true;
}

function howto_page_handler($segments) {
	include elgg_get_plugins_path() . 'lunch/pages/howto/index.php';
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

function lunch_gatekeeper($redirect = true) {
	elgg_load_library('elgg:lunch');
	if (!is_lunch_moderator()) {
		register_error("You must be a moderator to view that page.");
		if ($redirect) {
			forward(REFERER); // REFERER is a global variable that defines the previous page		
		} else {
			return false;
		}
	}
	return true;
}
	
elgg_register_event_handler('init', 'system', 'lunch_init');
	
?>