<?php
/**
 * Group tag-based search form body
 */

$tag_string = elgg_echo('groups:search:tags');

$params = array(
	'name' => 'tag',
	'class' => 'elgg-input-search mbm',
	'placeholder' => $tag_string,
);
echo elgg_view('input/text', $params);

echo elgg_view('input/submit', array('value' => elgg_echo('search:go')));
