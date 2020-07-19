<?php 
 //WARNING: The contents of this file are auto-generated


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


 // created: 2018-06-07 15:53:38
$layout_defs["Contacts"]["subpanel_setup"]['mdj_agencies_contacts_1'] = array (
  'order' => 100,
  'module' => 'mdj_Agencies',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MDJ_AGENCIES_CONTACTS_1_FROM_MDJ_AGENCIES_TITLE',
  'get_subpanel_data' => 'mdj_agencies_contacts_1',
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



//Hide Subpanel view Leads and member Organizations
unset($layout_defs['Contacts']['subpanel_setup']['activities']);
unset($layout_defs['Contacts']['subpanel_setup']['history']);
unset($layout_defs['Contacts']['subpanel_setup']['cases']);
unset($layout_defs['Contacts']['subpanel_setup']['bugs']);
unset($layout_defs['Contacts']['subpanel_setup']['project']);
unset($layout_defs['Contacts']['subpanel_setup']['campaigns']);
unset($layout_defs['Contacts']['subpanel_setup']['opportunities']);
unset($layout_defs['Contacts']['subpanel_setup']['contact_aos_quotes']);
unset($layout_defs['Contacts']['subpanel_setup']['contact_aos_invoices']);
unset($layout_defs['Contacts']['subpanel_setup']['contact_aos_contracts']);
unset($layout_defs['Contacts']['subpanel_setup']['fp_events_contacts']);
unset($layout_defs['Contacts']['subpanel_setup']['securitygroups']);
unset($layout_defs['Contacts']['subpanel_setup']['contacts']);



//unset($layout_defs['Accounts']['subpanel_setup']['accounts']);//unset_relationship.php

 // created: 2018-05-21 09:48:55
$layout_defs["Contacts"]["subpanel_setup"]['contacts_prospects_1'] = array (
  'order' => 100,
  'module' => 'Prospects',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CONTACTS_PROSPECTS_1_FROM_PROSPECTS_TITLE',
  'get_subpanel_data' => 'contacts_prospects_1',
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

?>