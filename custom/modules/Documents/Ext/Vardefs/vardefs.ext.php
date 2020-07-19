<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-06-07 12:51:12
$dictionary["Document"]["fields"]["nov_judicial_proceeding_documents_1"] = array (
  'name' => 'nov_judicial_proceeding_documents_1',
  'type' => 'link',
  'relationship' => 'nov_judicial_proceeding_documents_1',
  'source' => 'non-db',
  'module' => 'nov_judicial_proceeding',
  'bean_name' => 'nov_judicial_proceeding',
  'vname' => 'LBL_NOV_JUDICIAL_PROCEEDING_DOCUMENTS_1_FROM_NOV_JUDICIAL_PROCEEDING_TITLE',
);


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

?>