<?php
 // created: 2018-06-07 15:52:40
$layout_defs["nov_judicial_proceeding"]["subpanel_setup"]['mdj_agencies_nov_judicial_proceeding_1'] = array (
  'order' => 100,
  'module' => 'mdj_Agencies',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MDJ_AGENCIES_NOV_JUDICIAL_PROCEEDING_1_FROM_MDJ_AGENCIES_TITLE',
  'get_subpanel_data' => 'mdj_agencies_nov_judicial_proceeding_1',
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
