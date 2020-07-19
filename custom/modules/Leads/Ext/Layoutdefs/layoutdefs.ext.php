<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-05-31 11:45:05
$layout_defs["Leads"]["subpanel_setup"]['fp_event_locations_leads_1'] = array (
  'order' => 100,
  'module' => 'FP_Event_Locations',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_FP_EVENT_LOCATIONS_LEADS_1_FROM_FP_EVENT_LOCATIONS_TITLE',
  'get_subpanel_data' => 'fp_event_locations_leads_1',
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
unset($layout_defs['Leads']['subpanel_setup']['history']);
unset($layout_defs['Leads']['subpanel_setup']['activities']);
unset($layout_defs['Leads']['subpanel_setup']['campaigns']);
unset($layout_defs['Leads']['subpanel_setup']['securitygroups']);


 // created: 2018-06-07 15:53:13
$layout_defs["Leads"]["subpanel_setup"]['mdj_agencies_leads_1'] = array (
  'order' => 100,
  'module' => 'mdj_Agencies',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MDJ_AGENCIES_LEADS_1_FROM_MDJ_AGENCIES_TITLE',
  'get_subpanel_data' => 'mdj_agencies_leads_1',
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


 // created: 2018-06-07 16:30:38
$layout_defs["Leads"]["subpanel_setup"]['mdj_organizations_leads_1'] = array (
  'order' => 100,
  'module' => 'mdj_Organizations',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MDJ_ORGANIZATIONS_LEADS_1_FROM_MDJ_ORGANIZATIONS_TITLE',
  'get_subpanel_data' => 'mdj_organizations_leads_1',
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