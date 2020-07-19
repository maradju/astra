<?php
$module_name = 'FP_events';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
        'hidden' => 
        array (
          0 => '<input id="custom_hidden_1" type="hidden" name="custom_hidden_1" value=""/>',
          1 => '<input id="custom_hidden_2" type="hidden" name="custom_hidden_2" value=""/>',
        ),
      ),
      'maxColumns' => '2',
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'include/javascript/checkbox.js',
        ),
        1 => 
        array (
          'file' => 'cache/include/javascript/sugar_grp_yui_widgets.js',
        ),
      ),
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_PANEL_OVERVIEW' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'LBL_PANEL_OVERVIEW' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'description',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_start',
            'comment' => 'Date of start of meeting',
            'label' => 'LBL_DATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'reminder_c',
            'label' => 'LBL_REMINDER',
          ),
          1 => 
          array (
            'name' => 'when_to_remind_me_c',
            'label' => 'LBL_WHEN_TO_REMIND_ME',
          ),
        ),
        3 => 
        array (
          0 => 'assigned_user_name',
          1 => 
          array (
            'name' => 'reminder_exist_c',
            'label' => 'LBL_REMINDER_EXIST',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'fp_event_locations_fp_events_1_name',
          ),
          1 => 
          array (
            'name' => 'agencies_c',
            'studio' => 'visible',
            'label' => 'LBL_AGENCIES',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'victim_c',
            'studio' => 'visible',
            'label' => 'LBL_VICTIM',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
