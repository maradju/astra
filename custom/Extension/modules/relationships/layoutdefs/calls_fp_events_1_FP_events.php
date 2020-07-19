<?php
 // created: 2018-05-21 09:58:36
$layout_defs["FP_events"]["subpanel_setup"]['calls_fp_events_1'] = array (
  'order' => 100,
  'module' => 'Calls',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CALLS_FP_EVENTS_1_FROM_CALLS_TITLE',
  'get_subpanel_data' => 'calls_fp_events_1',
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
