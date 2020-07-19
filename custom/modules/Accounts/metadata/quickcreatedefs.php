<?php
$viewdefs ['Accounts'] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'last_name_c',
            'label' => 'LBL_LAST_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'gender_c',
            'studio' => 'visible',
            'label' => 'LBL_GENDER',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'phone_office',
          ),
          1 => 
          array (
            'name' => 'date_of_birth_c',
            'label' => 'LBL_DATE_OF_BIRTH',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'jjwg_maps_address_c',
            'label' => 'LBL_JJWG_MAPS_ADDRESS',
          ),
          1 => 
          array (
            'name' => 'email1',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'nationality_c',
            'label' => 'LBL_NATIONALITY',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'way_of_recruitment_c',
            'label' => 'LBL_WAY_OF_RECRUITMENT',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'relationship_with_trader_c',
            'label' => 'LBL_RELATIONSHIP_WITH_TRADER',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'marital_status_c',
            'studio' => 'visible',
            'label' => 'LBL_MARITAL_STATUS',
          ),
          1 => 
          array (
            'name' => 'experienced_violence_before_c',
            'studio' => 'visible',
            'label' => 'LBL_EXPERIENCED_VIOLENCE_BEFORE',
          ),
        ),
        8 => 
        array (
          1 => 
          array (
            'name' => 'judicial_proceeding_c',
            'label' => 'LBL_JUDICIAL_PROCEEDING',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'children_c',
            'studio' => 'visible',
            'label' => 'LBL_CHILDREN',
          ),
          1 => 
          array (
            'name' => 'active_case_c',
            'label' => 'LBL_ACTIVE_CASE',
          ),
        ),
      ),
    ),
  ),
);
?>
