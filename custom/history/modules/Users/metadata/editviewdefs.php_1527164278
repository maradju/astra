<?php
$viewdefs ['Users'] = 
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
      'form' => 
      array (
        'headerTpl' => 'modules/Users/tpls/EditViewHeader.tpl',
        'footerTpl' => 'modules/Users/tpls/EditViewFooter.tpl',
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_USER_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EMPLOYEE_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'LBL_USER_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 'first_name',
          1 => 'last_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'user_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'user_hash',
            'studio' => 
            array (
              'no_duplicate' => true,
              'listview' => false,
              'searchview' => false,
            ),
            'label' => 'LBL_USER_HASH',
          ),
        ),
        2 => 
        array (
          0 => 'photo',
          1 => 
          array (
            'name' => 'employee_status',
            'customCode' => '{if $IS_ADMIN}@@FIELD@@{else}{$EMPLOYEE_STATUS_READONLY}{/if}',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'email_c',
            'label' => 'LBL_EMAIL',
          ),
          1 => 'phone_mobile',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'calls_users_1_name',
          ),
        ),
      ),
      'LBL_EMPLOYEE_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 'show_on_employees',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'title',
            'customCode' => '{if $IS_ADMIN}@@FIELD@@{else}{$TITLE_READONLY}{/if}',
          ),
          1 => 'phone_work',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'reports_to_name',
            'customCode' => '{if $IS_ADMIN}@@FIELD@@{else}{$REPORTS_TO_READONLY}{/if}',
          ),
          1 => 'phone_other',
        ),
        3 => 
        array (
          0 => 'phone_fax',
        ),
        4 => 
        array (
          0 => 'phone_home',
        ),
        5 => 
        array (
          0 => 'messenger_type',
          1 => 'messenger_id',
        ),
        6 => 
        array (
          0 => 'address_street',
          1 => 'address_city',
        ),
        7 => 
        array (
          0 => 'address_state',
          1 => 'address_postalcode',
        ),
        8 => 
        array (
          0 => 'address_country',
        ),
        9 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
