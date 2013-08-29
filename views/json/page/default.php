<?php
/**
 * Elgg JSON output pageshell
 *
 * @package Elgg
 * @subpackage Core
 *
 */

// Edited to return results for fullcalendar format
// TODO

header("Content-Type: application/json");

global $jsonexport;
echo json_encode($jsonexport->result);