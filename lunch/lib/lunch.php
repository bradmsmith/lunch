<?php

/*
 * Shared functions stored here
 */


/*
 * Converts an address to lat/lng coordinates for maps
 */
function lunch_geocode($address) {
	$maps_api = 'http://maps.googleapis.com/maps/api/geocode/json?sensor=false&address=';
	$request = file_get_contents($maps_api . $address);
	return json_decode($request, true);
}

/*
 * Shows Add button for moderators
 * Probably should store moderator flag in usersettings in future.
 */
function is_lunch_moderator() {
	$username = elgg_get_logged_in_user_entity()->username;
	$moderators = explode(',', elgg_get_plugin_setting('moderators'));
	foreach ($moderators as $moderator) {
		if ($username == trim($moderator))
			return true;
	}
	return false;
}

?>