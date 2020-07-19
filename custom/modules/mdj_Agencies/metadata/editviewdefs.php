<?php
$module_name = 'mdj_Agencies';
$_object_name = 'mdj_agencies';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'phone_office',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'spam',
            'label' => 'LBL_SPAM',
          ),
          1 => 
          array (
            'name' => 'type_of_company',
            'studio' => 'visible',
            'label' => 'LBL_TYPE_OF_COMPANY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'registered_in_apr',
            'label' => 'LBL_REGISTERED_IN_APR',
          ),
          1 => 
          array (
            'name' => 'name_of_the_country',
            'label' => 'LBL_NAME_OF_THE_COUNTRY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'license',
            'label' => 'LBL_LICENSE',
          ),
          1 => 
          array (
            'name' => 'type_of_work',
            'label' => 'LBL_TYPE_OF_WORK',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'contract',
            'label' => 'LBL_CONTRACT',
          ),
          1 => 
          array (
            'name' => 'measures_taken',
            'studio' => 'visible',
            'label' => 'LBL_MEASURES_TAKEN',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'responce_to_astra',
            'label' => 'LBL_RESPONCE_TO_ASTRA',
          ),
          1 => 
          array (
            'name' => 'offer_accepted',
            'label' => 'LBL_OFFER_ACCEPTED',
          ),
        ),
        6 => 
        array (
          0 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
?>
