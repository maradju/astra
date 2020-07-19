<?php


class AlertLogicHook{

function send_alert($bean, $event, $arguments){

 //$alert = new Alert();

if($bean->reminder_c == true && $bean->reminder_exist_c == false ){
     
            $alert = BeanFactory::newBean('Alerts');
            $alert->name = $bean->name;
            $alert->date_entered = date("Y-m-d H:i:s");
            $alert->date_modified = date("Y-m-d H:i:s");
            $alert->modified_user_id = $bean->assigned_user_id;
            $alert->created_by = $bean->assigned_user_id;
            $alert->description = "Uspesno ste kreirali ";
            $alert->deleted="0";
            $alert->assigned_user_id = $bean->assigned_user_id;
            $alert->is_read="0";
            $alert->target_module = 'FP_events';
            $alert->type="info";
            $alert->url_redirect = "www.google.rs";
            $alert->save();
            $bean->reminder_exist_c = true;
            
        }
      }
 }
?>