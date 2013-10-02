<?php
/**
 * Menu dropdown
 */
?>

<div id="login">

<?php

if (elgg_is_logged_in()) {
	$text = elgg_get_logged_in_user_entity()->name;	
	$icon = elgg_get_logged_in_user_entity()->getIconURL('medium');
	
	echo elgg_view('output/url', array(
		'href' => 'login#login-dropdown-box',
		'rel' => 'popup',
		'text' => $text,
	)); 
	$body = "<img src='".$icon."'/><ul class='elgg-menu-site'><li><a href='/profile/'>Profile</a></li><li><a href='/settings/'>Settings</a></li><li><a href='/action/logout'>Sign Out</a></li></ul></li></ul>";
	echo elgg_view_module('dropdown', '', $body, array('id' => 'login-dropdown-box')); 
	
} else {
	echo elgg_view_form('login', array('action' => "/action/login"));
}

?>

</div>