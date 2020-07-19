<?php
$viewdefs ['Accounts'] = 
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
          'AOS_GENLET' => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup();" value="{$APP.LBL_PRINT_AS_PDF}">',
          ),
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
      'syncDetailEditViews' => true,
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
            'comment' => 'Name of the Company',
            'label' => 'LBL_NAME',
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
          1 => 
          array (
            'name' => 'age_c',
            'studio' => 'visible',
            'label' => 'LBL_AGE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'phone_office',
            'comment' => 'The office phone number',
            'label' => 'LBL_PHONE_OFFICE',
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
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'nationality_c',
            'label' => 'LBL_NATIONALITY',
          ),
          1 => 
          array (
            'name' => 'education_c',
            'studio' => 'visible',
            'label' => 'LBL_EDUCATION',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'area_c',
            'studio' => 'visible',
            'label' => 'LBL_AREA',
          ),
          1 => 
          array (
            'name' => 'type_of_exploitation_c',
            'studio' => 'visible',
            'label' => 'LBL_TYPE_OF_EXPLOITATION_C',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'way_of_recruitment_c',
            'label' => 'LBL_WAY_OF_RECRUITMENT',
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
          0 => 
          array (
            'name' => 'person_with_disability_c',
            'studio' => 'visible',
            'label' => 'LBL_PERSON_WITH_DISABILITY_C',
          ),
          1 => '',
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
