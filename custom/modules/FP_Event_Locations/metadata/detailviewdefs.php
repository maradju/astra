<?php
$module_name = 'FP_Event_Locations';
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
      ),
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'address',
            'label' => 'LBL_ADDRESS',
          ),
          1 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'number_of_victims_c',
            'label' => 'LBL_NUMBER_OF_VICTIMS',
          ),
          1 => 
          array (
            'name' => 'trafficker_c',
            'studio' => 'visible',
            'label' => 'LBL_TRAFFICKER',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'agencies_c',
            'studio' => 'visible',
            'label' => 'LBL_AGENCIES',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
