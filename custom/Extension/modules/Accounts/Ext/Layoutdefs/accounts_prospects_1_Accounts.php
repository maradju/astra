<?php
 // created: 2018-05-31 11:26:54
$layout_defs["Accounts"]["subpanel_setup"]['accounts_prospects_1'] = array (
  'order' => 100,
  'module' => 'Prospects',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_PROSPECTS_1_FROM_PROSPECTS_TITLE',
  'get_subpanel_data' => 'accounts_prospects_1',
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
