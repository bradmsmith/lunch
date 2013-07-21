<?php

$body = elgg_list_entities(array(
    'type' => 'object',
    'subtype' => 'lunch',
));

$body = elgg_view_layout('one_column', array('content' => $body));
 
echo elgg_view_page("All Site Lunchs", $body);

?>