<?php

function lunch_theme_init() {
    
	/**
	 * Plugin hook handlers
	 */
	elgg_register_plugin_hook_handler('prepare', 'menu:page', 'menu_hook_handler', 1000);
	elgg_register_plugin_hook_handler('prepare', 'menu:extras', 'menu_hook_handler', 1000);
	elgg_register_plugin_hook_handler('prepare', 'menu:site', 'menu_hook_handler', 1000);
	elgg_register_plugin_hook_handler('entity:icon:url', 'user', 'gravatar_hook_handler', 900); // Gravatar support
	elgg_register_plugin_hook_handler('public_pages', 'walled_garden', 'public_pages_hook_handler'); // Make some pages public	
	
    /**
     * Menu registration
     */
	elgg_register_menu_item('site', array('name' => 'howto', 'text' => 'How-to', 'href' => '/howto'));
	elgg_register_menu_item('site', array('name' => 'schools', 'text' => 'Schools', 'href' => '/map'));
	elgg_register_menu_item('site', array('name' => 'calendar', 'text' => 'Calendar', 'href' => '/calendar'));
	elgg_register_menu_item('site', array('name' => 'topics', 'text' => 'Topics', 'href' => '/topic'));
 
	// CSS
	elgg_extend_view('css/elgg', 'lunch_theme/css');
	
}


/*
 * Removes menu items from other plugins
 */
function menu_hook_handler($hook, $type, $items, $params) {
	
	// Move all items out of 'more' array	
	$items['default'] = array_merge($items['default'], $items['more']);
	unset($items['more']);	

	foreach ($items['default'] as $key => $item) {
		switch ($item->getName()) {
			case 'groups:all': 
			case 'groups:member': 
			case 'groups:owned': 
			case 'groups:user:invites': 
			case 'rss': 
			case 'activity':
			case 'blog':
			case 'groups':
			case 'more':			
				unset($items['default'][$key]); 
				break;	
		}
    }
  return $items;
}


/**
 *  Add Gravatar to user icons
 */
function gravatar_hook_handler($hook, $type, $url, $params) {

	// check if user already has an icon
	if (!$params['entity']->icontime) {
		$icon_sizes = elgg_get_config('icon_sizes');
		$size = $params['size'];
		if (!in_array($size, array_keys($icon_sizes))) {
			$size = 'small';
		}

		// avatars must be square
		$size = $icon_sizes[$size]['w'];

		$hash = md5($params['entity']->email);
		return "https://secure.gravatar.com/avatar/$hash.jpg?d=mm&s=$size";
	}
}

/**
 * Extend the public pages range
 *
 */
function public_pages_hook_handler($hook, $handler, $return, $params){
	// These pages will be public!
	$pages = array(
		'mod/lunch/vendors/fullcalendar/.*', // Contains calendar javascript
		'calendar', 						 // Calendar menubar		
		'index', 							 // Homepage
		'map', 								 // Map menubar
		'topic',							 // Topics menubar
		'howto',							 // Howto menu bar	
		'groupicon/.*',						 // School logos
		);						
	return array_merge($pages, $return);
}

elgg_register_event_handler('init', 'system', 'lunch_theme_init');

?>