<?php
 // created: 2018-05-31 11:45:15
$layout_defs["FP_Event_Locations"]["subpanel_setup"]['fp_event_locations_prospects_1'] = array (
  'order' => 100,
  'module' => 'Prospects',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_FP_EVENT_LOCATIONS_PROSPECTS_1_FROM_PROSPECTS_TITLE',
  'get_subpanel_data' => 'fp_event_locations_prospects_1',
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
