<?php
// make sure only logged in users can see this page 
gatekeeper();
// make sure only moderators can see this page
lunchmoderator();
 
// set the title
// for distributed plugins, be sure to use elgg_echo() for internationalization
$title = elgg_echo('lunch:topic:add');

// start building the main column of the page
$content = elgg_view_title($title);
 
// add the form to this section
$formvars = array('enctype'=>'multipart/form-data');
$content .= elgg_view_form("topic/save", $formvars);
 
// optionally, add the content for the sidebar
$sidebar = "Sidebar content";
 
// layout the page
$body = elgg_view_layout('one_sidebar', array(
   'content' => $content,
   'sidebar' => $sidebar
));
 
// draw the page
echo elgg_view_page($title, $body);
?>