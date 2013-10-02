<?php
/**
 * Save new topic
 *
 * @todo Improve file save to use entity icons - "can be overridden by registering a plugin hook for entity:icon:url, $entity_type.image file and type checks"
 */

// get the form inputs
$title = get_input('title');
$summary = get_input('summary');
$description = get_input('description');
$image = $_FILES['image'];
 
// create a new topic object
$object = new ElggObject();
$object->subtype = "topic";
$object->title = $title;
$object->summary = $summary;
$object->description = $description; // . var_export($image, true);
$object->access_id = ACCESS_PUBLIC; // for now make all topic posts public
$object->owner_guid = elgg_get_logged_in_user_guid();
$object_guid = $object->save();

// create a new topic image
$file = new ElggFile();
$filename = 'topic/' . $object->guid . '.jpg';
$file->container_guid = $object->guid;
$file->owner_guid = $object->guid;
$file->setFilename($filename);
$file->setMimeType($_FILES['image']['type']);
$file->originalfilename = $FILES['image']['name'];
$file->open("write");
$file->write(get_uploaded_file('image'));
$file->close();
$file_guid = $file->save();

// if the lunch was saved, we want to display all posts
// otherwise, we want to register an error and forward back to the form
if ($object_guid) {
   system_message("Your topic was saved");
   forward('/topic/all');
} else {
   register_error("The topic could not be saved");
   forward(REFERER); // REFERER is a global variable that defines the previous page
}
?>