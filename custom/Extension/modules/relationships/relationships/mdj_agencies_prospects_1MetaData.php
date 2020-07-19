<?php
// created: 2018-06-07 15:52:51
$dictionary["mdj_agencies_prospects_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'mdj_agencies_prospects_1' => 
    array (
      'lhs_module' => 'mdj_Agencies',
      'lhs_table' => 'mdj_agencies',
      'lhs_key' => 'id',
      'rhs_module' => 'Prospects',
      'rhs_table' => 'prospects',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mdj_agencies_prospects_1_c',
      'join_key_lhs' => 'mdj_agencies_prospects_1mdj_agencies_ida',
      'join_key_rhs' => 'mdj_agencies_prospects_1prospects_idb',
    ),
  ),
  'table' => 'mdj_agencies_prospects_1_c',
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
      'name' => 'mdj_agencies_prospects_1mdj_agencies_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mdj_agencies_prospects_1prospects_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mdj_agencies_prospects_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mdj_agencies_prospects_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mdj_agencies_prospects_1mdj_agencies_ida',
        1 => 'mdj_agencies_prospects_1prospects_idb',
      ),
    ),
  ),
);