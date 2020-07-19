<?php
// created: 2018-05-21 09:57:13
$dictionary["calls_users_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'calls_users_1' => 
    array (
      'lhs_module' => 'Calls',
      'lhs_table' => 'calls',
      'lhs_key' => 'id',
      'rhs_module' => 'Users',
      'rhs_table' => 'users',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'calls_users_1_c',
      'join_key_lhs' => 'calls_users_1calls_ida',
      'join_key_rhs' => 'calls_users_1users_idb',
    ),
  ),
  'table' => 'calls_users_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'calls_users_1calls_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'calls_users_1users_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'calls_users_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'calls_users_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'calls_users_1calls_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'calls_users_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'calls_users_1users_idb',
      ),
    ),
  ),
);