<?php
 // created: 2018-05-21 09:50:14
$layout_defs["Contacts"]["subpanel_setup"]['contacts_mdj_organizations_1'] = array (
  'order' => 100,
  'module' => 'mdj_Organizations',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CONTACTS_MDJ_ORGANIZATIONS_1_FROM_MDJ_ORGANIZATIONS_TITLE',
  'get_subpanel_data' => 'contacts_mdj_organizations_1',
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
