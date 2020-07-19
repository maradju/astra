<?php
$module_name = 'FP_events';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
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
            'type' => 'datetimecombo',
            'displayParams' => 
            array (
              'required' => true,
            ),
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
