<?php
// created: 2018-05-21 09:57:13
$dictionary["Call"]["fields"]["calls_users_1"] = array (
  'name' => 'calls_users_1',
  'type' => 'link',
  'relationship' => 'calls_users_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_CALLS_USERS_1_FROM_USERS_TITLE',
  'id_name' => 'calls_users_1users_idb',
);
$dictionary["Call"]["fields"]["calls_users_1_name"] = array (
  'name' => 'calls_users_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CALLS_USERS_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'calls_users_1users_idb',
  'link' => 'calls_users_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["Call"]["fields"]["calls_users_1users_idb"] = array (
  'name' => 'calls_users_1users_idb',
  'type' => 'link',
  'relationship' => 'calls_users_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CALLS_USERS_1_FROM_USERS_TITLE',
);
