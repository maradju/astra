<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-05-21 09:58:16
$layout_defs["Calls"]["subpanel_setup"]['calls_tasks_1'] = array (
  'order' => 100,
  'module' => 'Tasks',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CALLS_TASKS_1_FROM_TASKS_TITLE',
  'get_subpanel_data' => 'calls_tasks_1',
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
unset($layout_defs['Calls']['subpanel_setup']['notes']);
unset($layout_defs['Calls']['subpanel_setup']['securitygroups']);
unset($layout_defs['Calls']['subpanel_setup']['history']);

//unset($layout_defs['Accounts']['subpanel_setup']['accounts']);

 // created: 2018-05-21 10:00:15
$layout_defs["Calls"]["subpanel_setup"]['calls_documents_1'] = array (
  'order' => 100,
  'module' => 'Documents',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CALLS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
  'get_subpanel_data' => 'calls_documents_1',
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


 // created: 2018-05-21 09:55:57
$layout_defs["Calls"]["subpanel_setup"]['calls_accounts_2'] = array (
  'order' => 100,
  'module' => 'Accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CALLS_ACCOUNTS_2_FROM_ACCOUNTS_TITLE',
  'get_subpanel_data' => 'calls_accounts_2',
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


 // created: 2018-06-07 16:30:55
$layout_defs["Calls"]["subpanel_setup"]['mdj_organizations_calls_1'] = array (
  'order' => 100,
  'module' => 'mdj_Organizations',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MDJ_ORGANIZATIONS_CALLS_1_FROM_MDJ_ORGANIZATIONS_TITLE',
  'get_subpanel_data' => 'mdj_organizations_calls_1',
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


 // created: 2018-06-07 15:53:28
$layout_defs["Calls"]["subpanel_setup"]['mdj_agencies_calls_1'] = array (
  'order' => 100,
  'module' => 'mdj_Agencies',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MDJ_AGENCIES_CALLS_1_FROM_MDJ_AGENCIES_TITLE',
  'get_subpanel_data' => 'mdj_agencies_calls_1',
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


 // created: 2018-05-21 09:58:52
$layout_defs["Calls"]["subpanel_setup"]['calls_mdj_organizations_1'] = array (
  'order' => 100,
  'module' => 'mdj_Organizations',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CALLS_MDJ_ORGANIZATIONS_1_FROM_MDJ_ORGANIZATIONS_TITLE',
  'get_subpanel_data' => 'calls_mdj_organizations_1',
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


 // created: 2018-05-21 09:57:29
$layout_defs["Calls"]["subpanel_setup"]['calls_fp_event_locations_1'] = array (
  'order' => 100,
  'module' => 'FP_Event_Locations',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CALLS_FP_EVENT_LOCATIONS_1_FROM_FP_EVENT_LOCATIONS_TITLE',
  'get_subpanel_data' => 'calls_fp_event_locations_1',
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



    $layout_defs["Calls"]["subpanel_setup"]["Calls"]["top_buttons"] = array(
        array(
			//'widget_class' => 'SubPanelTopButtonQuickCreate',
            'widget_class' => 'SubPanelRSendButton',
        ),
        array(
            'widget_class' => 'SubPanelTopSelectButton',
            'mode' => 'MultiSelect',
        ),
    );


 // created: 2018-05-21 09:58:36
$layout_defs["Calls"]["subpanel_setup"]['calls_fp_events_1'] = array (
  'order' => 100,
  'module' => 'FP_events',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CALLS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE',
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


 // created: 2018-05-21 09:56:27
$layout_defs["Calls"]["subpanel_setup"]['calls_prospects_1'] = array (
  'order' => 100,
  'module' => 'Prospects',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CALLS_PROSPECTS_1_FROM_PROSPECTS_TITLE',
  'get_subpanel_data' => 'calls_prospects_1',
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