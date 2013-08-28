<?php
/**
 * Display calendar
 */

elgg_load_js('fullcalendar');
elgg_load_css('fullcalendar');

?>

<script>
$(document).ready(function() {

    // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({
        // put your options and callbacks here
    })

});
</script>

<div id="calendar"></div>