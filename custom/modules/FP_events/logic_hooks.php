<?php
$hook_version = 1; 
$hook_array = Array();
$hook_array['before_save'] = Array();


$hook_array['before_save'][] = Array( 1,'send_alert',
 'custom/modules/FP_events/logic_hook_alert.php', 'AlertLogicHook', 'send_alert');

?>
