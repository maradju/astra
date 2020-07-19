<?php
 // created: 2018-06-07 12:51:12
$layout_defs["Documents"]["subpanel_setup"]['nov_judicial_proceeding_documents_1'] = array (
  'order' => 100,
  'module' => 'nov_judicial_proceeding',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_NOV_JUDICIAL_PROCEEDING_DOCUMENTS_1_FROM_NOV_JUDICIAL_PROCEEDING_TITLE',
  'get_subpanel_data' => 'nov_judicial_proceeding_documents_1',
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
