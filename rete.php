<?php
// Get the JSON data
$json = file_get_contents('php://input');
// Decode the JSON data into an array
$array = json_decode($json,true);
// Grab variables from the array
$monitor_id = $array['monitor_id'];
$monitor_name = $array['monitor_name'];
$monitor_target = $array['monitor_target'];
$monitor_type = $array['monitor_type'];
$monitor_category = $array['monitor_category'];
$monitor_status = $array['monitor_status'];
$monitor_errors = $array['monitor_errors'];
$timestamp = $array['timestamp'];
?>
