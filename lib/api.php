<?php
/**
 *	Campuslunch API
 */

expose_function('lunch', 
				'lunch_timeline', array(
					'start' => array('type' => 'int'),
					'end'  => array('type' => 'int'),
					), 
				'Method to get campus lunches for a specific month', 
				'GET', 
				false, 
				false);

function lunch_timeline($start, $end) {
			
	// Get all lunches for requested month
	$lunches = elgg_get_entities_from_metadata(array(
		'types' => 'object',
		'subtype' => 'lunch',
		'metadata_name_value_pairs' => array(
			array('name' => 'date', 'value' => date('Y-m-d', $start), 'operand' => '>='), 
			array('name' => 'date', 'value' => date('Y-m-d', $end), 'operand' => '<='),
		)
	));
	
	// Format response	
	$result = array();
	foreach ($lunches as $lunch) {
		$result[] = array(
			'title' => $lunch->getContainerEntity()->name,
			'lunch' => $lunch->title,
			'date' => $lunch->date,
			'color' => ($lunch->freefood) ? '#f79421' : '#00bff3',
			'url' => '/groups/' . $lunch->container_guid,
			);
	}
	return $result;
}

?>