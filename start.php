<?php
	
	// Action for saving lunch
	elgg_register_action("lunch/save", elgg_get_plugins_path() . "lunch/actions/lunch/save.php");

	// Handler for serving lunch form
	elgg_register_page_handler('lunch', 'lunch_page_handler');
	
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
?>