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
	remove_group_tool_option('event_manager');
		
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

elgg_register_event_handler('init', 'system', 'lunch_theme_init');

?>