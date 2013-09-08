<?php
/**
 * Elgg page drawer wrapper
 *
 * @uses $vars['drawer'] The HTML of the page drawer
 */

echo elgg_extract('drawer', $vars, '');