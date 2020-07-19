<?php
// created: 2018-05-21 10:00:15
$dictionary["Document"]["fields"]["calls_documents_1"] = array (
  'name' => 'calls_documents_1',
  'type' => 'link',
  'relationship' => 'calls_documents_1',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'vname' => 'LBL_CALLS_DOCUMENTS_1_FROM_CALLS_TITLE',
  'id_name' => 'calls_documents_1calls_ida',
);
$dictionary["Document"]["fields"]["calls_documents_1_name"] = array (
  'name' => 'calls_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CALLS_DOCUMENTS_1_FROM_CALLS_TITLE',
  'save' => true,
  'id_name' => 'calls_documents_1calls_ida',
  'link' => 'calls_documents_1',
  'table' => 'calls',
  'module' => 'Calls',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["calls_documents_1calls_ida"] = array (
  'name' => 'calls_documents_1calls_ida',
  'type' => 'link',
  'relationship' => 'calls_documents_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CALLS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);
