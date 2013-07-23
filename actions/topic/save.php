<?php
// get the form inputs
$title = get_input('title');
$body = get_input('body');
$tags = string_to_tag_array(get_input('tags'));
 
// create a new topic object
$object = new ElggObject();
$object->subtype = "topic";
$object->title = $title;
$object->description = $body;
$object->tags = $tags;
 
// for now make all topic posts public
$object->access_id = ACCESS_PUBLIC;
$object->owner_guid = elgg_get_logged_in_user_guid();

// save to database and get id of the new lunch
$object_guid = $object->save();

// if the lunch was saved, we want to display the new post
// otherwise, we want to register an error and forward back to the form
if ($object_guid) {
   system_message("Your topic was saved");
   forward($object->getURL());
} else {
   register_error("The topic could not be saved");
   forward(REFERER); // REFERER is a global variable that defines the previous page
}
?>