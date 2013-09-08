<?php
/**
 * Display calendar
 */

elgg_load_js('fullcalendar');
elgg_load_css('fullcalendar');

?>

<script>
$(document).ready(function() {

    $('#calendar').fullCalendar({
		events: {
			url: '/services/api/rest/json/?method=lunch',
			textColor: 'white',
		},
		buttonText: {
			today: 'Today'
		},
		weekMode: 'variable',
	});
	
});
</script>

<div id="calendar"></div>


 