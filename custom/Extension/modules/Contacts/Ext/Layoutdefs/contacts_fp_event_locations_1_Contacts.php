<?php
 // created: 2018-05-21 09:48:20
$layout_defs["Contacts"]["subpanel_setup"]['contacts_fp_event_locations_1'] = array (
  'order' => 100,
  'module' => 'FP_Event_Locations',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CONTACTS_FP_EVENT_LOCATIONS_1_FROM_FP_EVENT_LOCATIONS_TITLE',
  'get_subpanel_data' => 'contacts_fp_event_locations_1',
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
