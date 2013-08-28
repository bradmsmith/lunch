<?php
/**
 *	Campuslunch API
 */

expose_function('lunch', 
				'lunch_timeline', array(
					'month' => array('type' => 'int'),
					'year'  => array('type' => 'int'),
					), 
				'Method to get campus lunches for a specific month', 
				'GET', 
				false, 
				false);

function lunch_timeline($month, $year) {

	$response = array();
	
	// Format date based on input
	$date = $year .	'-' . str_pad($month, 2, 0, STR_PAD_LEFT) . '-01';
	
	// Get all lunches for requested month
	$lunches = elgg_get_entities_from_metadata(array(
		'types' => 'object',
		'subtype' => 'lunch',
		'metadata_name_value_pairs' => array(
			array('name' => 'date', 'value' => date($date), 'operand' => '>='), 
			array('name' => 'date', 'value' => date('Y-m-d', strtotime("+1 month", strtotime($date))), 'operand' => '<'),
		)
	));
	
	// Format response	
	foreach ($lunches as $lunch) {
		$response[] = array(
			'school' => $lunch->getContainerEntity()->name,
			'title' => $lunch->title,
			'date' => $lunch->date,
			);
	}
	
    return $response;
}

// pro.local/services/api/rest/xml/?method=system.api.list
?>