<?php

/*
 * Shared functions stored here
 */


/*
 * Converts an address to lat/lng coordinates for maps
 *
 */
function lunch_geocode($address) {
	$maps_api = 'http://maps.googleapis.com/maps/api/geocode/json?sensor=false&address=';
	$request = file_get_contents($maps_api . $address);
	return json_decode($request, true);
}


?>