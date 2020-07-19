<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['process_record'] = Array(); 
$hook_array['process_record'][] = Array(1, 'count', 'modules/Calls_Reschedule/reschedule_count.php','reschedule_count', 'count'); 

$hook_array['before_save'] = Array();


$hook_array['before_save'][] = Array( 3,'extract_month',
 'modules/Calls/logic_hook_month.php', 'MonthLogicHook', 'extract_month');

$hook_array['after_save'] = Array();


$hook_array['after_save'][] = Array( 8,'auto_increment',
 'modules/Calls/logic_hook_autoincrement.php', 'AutoLogicHook', 'auto_increment');

?>