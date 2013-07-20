<?php

elgg_register_event_handler('init', 'system', 'campuslunch_init');
elgg_register_plugin_hook_handler('prepare', 'menu:page', 'campuslunch_menu', 1000);
elgg_register_plugin_hook_handler('prepare', 'menu:extras', 'campuslunch_menu', 1000);

function campuslunch_init() {
    
	// elgg_register_menu_item('page', array('name' => 'testing1:test', 'text' => 'testing2', 'href' => '/'));

}

function campuslunch_menu($hook, $type, $items, $params) {
  	// var_dump($items['default']);
	// Unregister menu items
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

?>