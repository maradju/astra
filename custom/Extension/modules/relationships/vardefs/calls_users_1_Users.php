<?php
// created: 2018-05-21 09:57:13
$dictionary["User"]["fields"]["calls_users_1"] = array (
  'name' => 'calls_users_1',
  'type' => 'link',
  'relationship' => 'calls_users_1',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'vname' => 'LBL_CALLS_USERS_1_FROM_CALLS_TITLE',
  'id_name' => 'calls_users_1calls_ida',
);
$dictionary["User"]["fields"]["calls_users_1_name"] = array (
  'name' => 'calls_users_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CALLS_USERS_1_FROM_CALLS_TITLE',
  'save' => true,
  'id_name' => 'calls_users_1calls_ida',
  'link' => 'calls_users_1',
  'table' => 'calls',
  'module' => 'Calls',
  'rname' => 'name',
);
$dictionary["User"]["fields"]["calls_users_1calls_ida"] = array (
  'name' => 'calls_users_1calls_ida',
  'type' => 'link',
  'relationship' => 'calls_users_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CALLS_USERS_1_FROM_CALLS_TITLE',
);
