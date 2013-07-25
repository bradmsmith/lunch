<?php
	
	// Actions for saving objects
	elgg_register_action("lunch/save", elgg_get_plugins_path() . "lunch/actions/lunch/save.php");
	elgg_register_action("topic/save", elgg_get_plugins_path() . "lunch/actions/topic/save.php");

	// Pages for serving objects
	elgg_register_page_handler('lunch', 'lunch_page_handler');
	elgg_register_page_handler('topic', 'topic_page_handler');
	
	// Menus
	elgg_register_plugin_hook_handler('register', 'menu:owner_block', 'lunch_owner_block_menu');
	
	// extend group main page
	elgg_extend_view('groups/tool_latest', 'lunch/group_module');
		
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
		$username = get_loggedin_user()->username;
		$moderators = explode(',', get_plugin_setting('moderators'));
		foreach ($moderators as $moderator) {
			if ($username == trim($moderator))
				return true;
		}
		return false;
	}
	
?>