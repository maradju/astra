<?php
 // created: 2018-06-07 15:54:00
$layout_defs["FP_events"]["subpanel_setup"]['mdj_agencies_fp_events_1'] = array (
  'order' => 100,
  'module' => 'mdj_Agencies',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MDJ_AGENCIES_FP_EVENTS_1_FROM_MDJ_AGENCIES_TITLE',
  'get_subpanel_data' => 'mdj_agencies_fp_events_1',
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
