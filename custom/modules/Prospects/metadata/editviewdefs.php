<?php
$viewdefs ['Prospects'] = 
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_PROSPECT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_prospect_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_name12_c',
            'label' => 'LBL_FIRST_NAME12',
          ),
          1 => 
          array (
            'name' => 'last_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        1 => 
        array (
          0 => 'phone_mobile',
          1 => 
          array (
            'name' => 'jjwg_maps_address_c',
            'label' => 'LBL_JJWG_MAPS_ADDRESS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'gender_c',
            'studio' => 'visible',
            'label' => 'LBL_GENDER',
          ),
          1 => 
          array (
            'name' => 'age_c',
            'label' => 'LBL_AGE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'nationality_c',
            'studio' => 'visible',
            'label' => 'LBL_NATIONALITY',
          ),
          1 => 
          array (
            'name' => 'marital_status_c',
            'studio' => 'visible',
            'label' => 'LBL_MARITAL_STATUS',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'punished_before_c',
            'label' => 'LBL_PUNISHED_BEFORE',
          ),
          1 => 
          array (
            'name' => 'is_he_recruiter_c',
            'label' => 'LBL_IS_HE_RECRUITER',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'number_of_victims_c',
            'label' => 'LBL_NUMBER_OF_VICTIMS',
          ),
          1 => 
          array (
            'name' => 'relation_with_victim_c',
            'studio' => 'visible',
            'label' => 'LBL_RELATION_WITH_VICTIM',
          ),
        ),
      ),
    ),
  ),
);
?>
