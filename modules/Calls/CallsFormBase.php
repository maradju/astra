<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class CallFormBase{
	function handleSave($prefix,$redirect=true, $useRequired=false){
	
    
	require_once('include/formbase.php');

	$focus = new Account();

	if($useRequired &&  !checkRequired($prefix, array_keys($focus->required_fields))){
		return null;
	}
	$focus = populateFromPost($prefix, $focus);

	if (isset($GLOBALS['check_notify'])) {
		$check_notify = $GLOBALS['check_notify'];
	}
	else {
		$check_notify = FALSE;
	}

	if (empty($_POST['record']) && empty($_POST['dup_checked'])) {
		$duplicateAccounts = $this->checkForDuplicates($prefix);
		if(isset($duplicateAccounts)){
			$location='module=Accounts&action=ShowDuplicates';
			$get = '';

			// Bug 25311 - Add special handling for when the form specifies many-to-many relationships
			if(isset($_POST['relate_to']) && !empty($_POST['relate_to'])) {
				$get .= '&Accountsrelate_to='.$_POST['relate_to'];
			}
			if(isset($_POST['relate_id']) && !empty($_POST['relate_id'])) {
				$get .= '&Accountsrelate_id='.$_POST['relate_id'];
			}
			
			//add all of the post fields to redirect get string
			foreach ($focus->column_fields as $field)
			{
				if (!empty($focus->$field) && !is_object($focus->$field))
				{
					$get .= "&Accounts$field=".urlencode($focus->$field);
				}
			}

			foreach ($focus->additional_column_fields as $field)
			{
				if (!empty($focus->$field))
				{
					$get .= "&Accounts$field=".urlencode($focus->$field);
				}
			}
            
			
			if($focus->hasCustomFields()) {
				foreach($focus->field_defs as $name=>$field) {	
					if (!empty($field['source']) && $field['source'] == 'custom_fields')
					{
						$get .= "&Accounts$name=".urlencode($focus->$name);
					}			    
				}
			}
			
			
			
			$emailAddress = new SugarEmailAddress();
			$get .= $emailAddress->getFormBaseURL($focus);

			
			
			//create list of suspected duplicate account id's in redirect get string
			$i=0;
			foreach ($duplicateAccounts as $account)
			{
				$get .= "&duplicate[$i]=".$account['id'];
				$i++;
			}

			//add return_module, return_action, and return_id to redirect get string
			$urlData = array('return_module' => 'Accounts', 'return_action' => '');
			foreach (array('return_module', 'return_action', 'return_id', 'popup', 'create') as $var) {
			    if (!empty($_POST[$var])) {
			        $urlData[$var] = $_POST[$var];
			    }
			}
			$get .= "&".http_build_query($urlData);

			$_SESSION['SHOW_DUPLICATES'] = $get;
			//now redirect the post to modules/Accounts/ShowDuplicates.php
            if (!empty($_POST['is_ajax_call']) && $_POST['is_ajax_call'] == '1')
            {
            	ob_clean();
                $json = getJSONobj();
                echo $json->encode(array('status' => 'dupe', 'get' => $location));
            }
            else if(!empty($_REQUEST['ajax_load']))
            {
                echo "<script>SUGAR.ajaxUI.loadContent('index.php?$location');</script>";
            }
            else {
                if(!empty($_POST['to_pdf']))
                    $location .= '&to_pdf='.urlencode($_POST['to_pdf']);
                header("Location: index.php?$location");
            }
			return null;
		}
	}
	if(!$focus->ACLAccess('Save')){
		ACLController::displayNoAccess(true);
		sugar_cleanup(true);
	}

	$focus->save($check_notify);
    $return_id = $focus->id;
    
	$GLOBALS['log']->debug("Saved record with id of ".$return_id);


    if (!empty($_POST['is_ajax_call']) && $_POST['is_ajax_call'] == '1') {
        $json = getJSONobj();
        echo $json->encode(array('status' => 'success',
                                 'get' => ''));
   	 	$trackerManager = TrackerManager::getInstance();
        $timeStamp = TimeDate::getInstance()->nowDb();
        if($monitor = $trackerManager->getMonitor('tracker')){ 
	        $monitor->setValue('action', 'detailview');
	        $monitor->setValue('user_id', $GLOBALS['current_user']->id);
	        $monitor->setValue('module_name', 'Accounts');
	        $monitor->setValue('date_modified', $timeStamp);
	        $monitor->setValue('visible', 1);
	
	        if (!empty($this->bean->id)) {
	            $monitor->setValue('item_id', $return_id);
	            $monitor->setValue('item_summary', $focus->get_summary_text());
	        }
			$trackerManager->saveMonitor($monitor, true, true);
		}
        return null;
    }

    if (isset($_POST['popup']) && $_POST['popup'] == 'true') {
	    $urlData = array("query" => true, "name" => $focus->name, "module" => 'Accounts', 'action' => 'Popup');
    	if (!empty($_POST['return_module'])) {
    	    $urlData['module'] = $_POST['return_module'];
    	}
        if (!empty($_POST['return_action'])) {
    	    $urlData['action'] = $_POST['return_action'];
    	}
    	foreach (array('return_id', 'popup', 'create', 'to_pdf') as $var) {
    	    if (!empty($_POST[$var])) {
    	        $urlData[$var] = $_POST[$var];
    	    }
    	}
		header("Location: index.php?".http_build_query($urlData));
		return;
	}
	if($redirect){
		handleRedirect($return_id,'Accounts');
	}else{
		return $focus;
	}
	}
}
?>