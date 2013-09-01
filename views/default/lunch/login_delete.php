<?php
// allow plugins to override the login page
if (elgg_trigger_plugin_hook('login', 'lunch', null, FALSE) != FALSE) {
	echo "login yes";
	exit;
} else {
	echo "login no";
}