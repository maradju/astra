<?php
 // created: 2018-06-07 15:52:29
$layout_defs["mdj_Agencies"]["subpanel_setup"]['mdj_agencies_fp_event_locations_2'] = array (
  'order' => 100,
  'module' => 'FP_Event_Locations',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MDJ_AGENCIES_FP_EVENT_LOCATIONS_2_FROM_FP_EVENT_LOCATIONS_TITLE',
  'get_subpanel_data' => 'mdj_agencies_fp_event_locations_2',
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
