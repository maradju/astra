<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-06-07 15:53:50
$layout_defs["Tasks"]["subpanel_setup"]['mdj_agencies_tasks_1'] = array (
  'order' => 100,
  'module' => 'mdj_Agencies',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MDJ_AGENCIES_TASKS_1_FROM_MDJ_AGENCIES_TITLE',
  'get_subpanel_data' => 'mdj_agencies_tasks_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


 // created: 2018-05-21 09:58:16
$layout_defs["Tasks"]["subpanel_setup"]['calls_tasks_1'] = array (
  'order' => 100,
  'module' => 'Calls',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CALLS_TASKS_1_FROM_CALLS_TITLE',
  'get_subpanel_data' => 'calls_tasks_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);

?>