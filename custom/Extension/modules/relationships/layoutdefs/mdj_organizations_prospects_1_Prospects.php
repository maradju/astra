<?php
 // created: 2018-06-07 16:29:49
$layout_defs["Prospects"]["subpanel_setup"]['mdj_organizations_prospects_1'] = array (
  'order' => 100,
  'module' => 'mdj_Organizations',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MDJ_ORGANIZATIONS_PROSPECTS_1_FROM_MDJ_ORGANIZATIONS_TITLE',
  'get_subpanel_data' => 'mdj_organizations_prospects_1',
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
