<?php
// get the form inputs
$title = get_input('title');
$body = get_input('body');
$tags = string_to_tag_array(get_input('tags'));
 
// create a new my_blog object
$lunch = new ElggObject();
$lunch->subtype = "lunch";
$lunch->title = $title;
$lunch->description = $body;
 
// for now make all my_blog posts public
$lunch->access_id = ACCESS_PUBLIC;
 
// owner is logged in user
$lunch->owner_guid = elgg_get_logged_in_user_guid();
 
// save tags as metadata
$lunch->tags = $tags;
 
// save to database and get id of the new lunch
$lunch = $lunch->save();
 
// if the lunch was saved, we want to display the new post
// otherwise, we want to register an error and forward back to the form
if ($lunch_guid) {
   system_message("Your lunch was saved");
   forward($lunch->getURL());
} else {
   register_error("The lunch could not be saved");
   forward(REFERER); // REFERER is a global variable that defines the previous page
}
?>