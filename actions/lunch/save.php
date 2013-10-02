<?php
// get the form inputs
$title = get_input('title');
$body = get_input('body');
$tags = string_to_tag_array(get_input('tags'));
$speaker = get_input('speaker');
$topic = get_input('topic');
$date = get_input('date');
$freefood = get_input('freefood');
$attendees = get_input('attendees');
$topic_guid = get_input('topic');
$container_guid = (int)get_input('container_guid');
 
// create a new lunch object
$lunch = new ElggObject();
$lunch->subtype = "lunch";
$lunch->title = $title;
$lunch->description = $body;
$lunch->container_guid = $container_guid;
 
// for now make all lunch posts public
$lunch->access_id = ACCESS_PUBLIC;
$lunch->topic = $topic;
$lunch->attendees = $attendees;
$lunch->date = $date;
$lunch->speaker = $speaker;
$lunch->freefood = $freefood;
$lunch->owner_guid = elgg_get_logged_in_user_guid();

// Only save lunch if it was created in a group - disable site-wide lunches
if ($container_guid && can_write_to_container(elgg_get_logged_in_user_guid(), $container_guid)) {
	// save to database and get id of the new lunch
	$lunch_guid = $lunch->save();
	
	// add topic relationship to lunch
	add_entity_relationship($lunch_guid, 'example', $topic_guid);
	
}

// if the lunch was saved, we want to display the new post
// otherwise, we want to register an error and forward back to the form
if ($lunch_guid) {
   system_message("Your lunch was saved");
   forward(REFERER);
} else {
   register_error("The lunch could not be saved");
   forward(REFERER); // REFERER is a global variable that defines the previous page
}
?>