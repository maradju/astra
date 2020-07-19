<?php
 // created: 2018-06-07 15:53:50
$layout_defs["mdj_Agencies"]["subpanel_setup"]['mdj_agencies_tasks_1'] = array (
  'order' => 100,
  'module' => 'Tasks',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MDJ_AGENCIES_TASKS_1_FROM_TASKS_TITLE',
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
