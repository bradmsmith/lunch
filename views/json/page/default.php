<?php
/**
 * Edited to return results for fullcalendar format
 */


header("Content-Type: application/json");

global $jsonexport;
echo json_encode($jsonexport->result);