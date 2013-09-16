<?php
/**
 * Walled garden page shell
 *
 * Shows the login page if requested, otherwise shows welcome page
 */

switch (elgg_get_context()) {
	case 'login':
		$body = elgg_view('core/walled_garden/login');
		break;
	case 'register':
		$body = elgg_view('core/walled_garden/register');
		break;
	case 'forgotpassword':
		$body = elgg_view('core/walled_garden/lost_password');
		break;
	default:
		$body = elgg_view('page/index/index');
}

echo elgg_view('page/default', array('body' => $body));

