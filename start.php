<?php
	
	// Action for saving lunch
	elgg_register_action("lunch/save", elgg_get_plugins_path() . "lunch/actions/lunch/save.php");

	// Handler for serving lunch form
	elgg_register_page_handler('lunch', 'lunch_page_handler');
	
	// Menus
	elgg_register_plugin_hook_handler('register', 'menu:owner_block', 'lunch_owner_block_menu');
		
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
	
	/**
	 * add menu item to owner block
	 */
	function lunch_owner_block_menu($hook, $entity_type, $returnvalue, $params){
		$group = elgg_extract("entity", $params);
		if (elgg_instanceof($group, 'group') && $group->event_manager_enable != "no") {
			$url = '/lunch/all/' . $group->getGUID();
			$item = new ElggMenuItem('lunch', elgg_echo('lunch:menu:lunches'), $url);
			$returnvalue[] = $item;
		}
		
		return $returnvalue;
	}
	
?>