<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-06-07 12:24:44
$dictionary['nov_judicial_proceeding']['fields']['start_date_c']['inline_edit']='1';
$dictionary['nov_judicial_proceeding']['fields']['start_date_c']['labelValue']='Start date';

 

// created: 2018-06-07 15:52:40
$dictionary["nov_judicial_proceeding"]["fields"]["mdj_agencies_nov_judicial_proceeding_1"] = array (
  'name' => 'mdj_agencies_nov_judicial_proceeding_1',
  'type' => 'link',
  'relationship' => 'mdj_agencies_nov_judicial_proceeding_1',
  'source' => 'non-db',
  'module' => 'mdj_Agencies',
  'bean_name' => 'mdj_Agencies',
  'vname' => 'LBL_MDJ_AGENCIES_NOV_JUDICIAL_PROCEEDING_1_FROM_MDJ_AGENCIES_TITLE',
);


 // created: 2018-06-07 12:08:58
$dictionary['nov_judicial_proceeding']['fields']['type']['len']=100;
$dictionary['nov_judicial_proceeding']['fields']['type']['inline_edit']=true;
$dictionary['nov_judicial_proceeding']['fields']['type']['comments']='The type of issue (ex: issue, feature)';
$dictionary['nov_judicial_proceeding']['fields']['type']['merge_filter']='disabled';

 

// created: 2018-06-07 12:51:12
$dictionary["nov_judicial_proceeding"]["fields"]["nov_judicial_proceeding_documents_1"] = array (
  'name' => 'nov_judicial_proceeding_documents_1',
  'type' => 'link',
  'relationship' => 'nov_judicial_proceeding_documents_1',
  'source' => 'non-db',
  'module' => 'Documents',
  'bean_name' => 'Document',
  'vname' => 'LBL_NOV_JUDICIAL_PROCEEDING_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);


 // created: 2018-06-07 12:24:53
$dictionary['nov_judicial_proceeding']['fields']['end_date_c']['inline_edit']='1';
$dictionary['nov_judicial_proceeding']['fields']['end_date_c']['labelValue']='End date';

 

// created: 2018-06-07 12:50:05
$dictionary["nov_judicial_proceeding"]["fields"]["nov_judicial_proceeding_accounts_1"] = array (
  'name' => 'nov_judicial_proceeding_accounts_1',
  'type' => 'link',
  'relationship' => 'nov_judicial_proceeding_accounts_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_NOV_JUDICIAL_PROCEEDING_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
);


// created: 2018-06-07 12:50:22
$dictionary["nov_judicial_proceeding"]["fields"]["nov_judicial_proceeding_prospects_1"] = array (
  'name' => 'nov_judicial_proceeding_prospects_1',
  'type' => 'link',
  'relationship' => 'nov_judicial_proceeding_prospects_1',
  'source' => 'non-db',
  'module' => 'Prospects',
  'bean_name' => 'Prospect',
  'vname' => 'LBL_NOV_JUDICIAL_PROCEEDING_PROSPECTS_1_FROM_PROSPECTS_TITLE',
);

?>