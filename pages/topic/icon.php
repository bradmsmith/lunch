<?php
/**
 * Display topic icons from data directory
 * /topic/icon/55.jpg
 */

// make sure only logged in users can see this page 
gatekeeper();

$filehandler = new ElggFile();
$filehandler->owner_guid = $segments[1];
$filehandler->setFilename("topic/" . $segments[1] . ".jpg");


$success = false;
if ($filehandler->open("read")) {
	if ($contents = $filehandler->read($filehandler->size())) {
		$success = true;
	}
}

// Send headers
header("Content-type: image/jpeg");
header('Expires: ' . gmdate('D, d M Y H:i:s \G\M\T', strtotime("+2 months")), true);
header("Pragma: public");
header("Cache-Control: public");

// Display default graphic if no icon
if (!$success) {
	$location = elgg_get_plugins_path() . "lunch/graphics/defaulticon.gif";
	$contents = @file_get_contents($location);
	echo $contents;
} else {
	// otherwise display icon
	readfile($filehandler->getFilenameOnFilestore());
	exit;
}

?>