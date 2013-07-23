<?php

function lunch_theme_init() {
    
	// Menus
	elgg_register_plugin_hook_handler('prepare', 'menu:page', 'menu_hook_handler', 1000);
	elgg_register_plugin_hook_handler('prepare', 'menu:extras', 'menu_hook_handler', 1000);
	
	/*
 	 * Groups
	 * Remove tool options. Need to disable them still.
	 */
	remove_group_tool_option('activity');  	
	remove_group_tool_option('blog');  	
	remove_group_tool_option('forum');
	
	// Gravatar support
	elgg_register_plugin_hook_handler('entity:icon:url', 'user', 'gravatar_hook_handler', 900);
		
}


/*
 * Removes menu items from other plugins
 */
function menu_hook_handler($hook, $type, $items, $params) {

  	// var_dump($items['default']);
	foreach ($items['default'] as $key => $item) {
		switch ($item->getName()) {
			case 'groups:all': 
				unset($items['default'][$key]);
				break;
			case 'groups:member': 
				unset($items['default'][$key]);
				break;
			case 'groups:owned': 
				unset($items['default'][$key]);
				break;
			case 'groups:user:invites': 
				unset($items['default'][$key]);
				break;	
			case 'rss': 
				unset($items['default'][$key]);
				break;	
		}
    }
  return $items;
}


/**
 * This hooks into the getIcon API and returns a gravatar icon
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

elgg_register_event_handler('init', 'system', 'lunch_theme_init');

?>