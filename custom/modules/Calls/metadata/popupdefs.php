<?php
$popupMeta = 
array (
  'moduleMain' => 'Calls',
  'varName' => 'Calls',
  'orderBy' => 'calls.name',
  'whereClauses' => 
  array (
    'name' => 'calls.name',
  ),
  'searchInputs' => 
  'create' =>
array('formBase' => 'CallsFormBase.php',
'formBaseClass' => 'CallsFormBase',
'getFormBodyParams' => array('','','Callssave'),
'createButton' => $mod_strings['LNK_NEW_RECORD'],
‘createButton’=>’LNK_NEW_CALLS’  , 
),



  array (
    0 => 'calls_number',
    1 => 'name',
    2 => 'priority',
    3 => 'status',
  ),
);
?>
