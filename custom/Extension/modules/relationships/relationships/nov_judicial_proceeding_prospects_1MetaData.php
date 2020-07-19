<?php
// created: 2018-06-07 12:50:22
$dictionary["nov_judicial_proceeding_prospects_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'nov_judicial_proceeding_prospects_1' => 
    array (
      'lhs_module' => 'nov_judicial_proceeding',
      'lhs_table' => 'nov_judicial_proceeding',
      'lhs_key' => 'id',
      'rhs_module' => 'Prospects',
      'rhs_table' => 'prospects',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'nov_judicial_proceeding_prospects_1_c',
      'join_key_lhs' => 'nov_judicial_proceeding_prospects_1nov_judicial_proceeding_ida',
      'join_key_rhs' => 'nov_judicial_proceeding_prospects_1prospects_idb',
    ),
  ),
  'table' => 'nov_judicial_proceeding_prospects_1_c',
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
      'name' => 'nov_judicial_proceeding_prospects_1nov_judicial_proceeding_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'nov_judicial_proceeding_prospects_1prospects_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'nov_judicial_proceeding_prospects_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'nov_judicial_proceeding_prospects_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'nov_judicial_proceeding_prospects_1nov_judicial_proceeding_ida',
        1 => 'nov_judicial_proceeding_prospects_1prospects_idb',
      ),
    ),
  ),
);