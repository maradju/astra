<?php

class AccountsController extends SugarController{
        function __construct(){
            parent::__construct();
        }

        function pre_editview(){

            if (empty($this->bean->id) && !empty($_REQUEST['Leads']) &&$_REQUEST['Leads'] == 'Leads' ) {

                $return_module =new Leads();
                $return_module->retrieve($_REQUEST['return_id']);
            //odavde
             foreach($return_module>field_defs as $key=>$value)
                {
                    if ($key == 'id' or $key=='deleted' )continue;
                    if (isset($this->bean->field_defs[$key])) {
                        $this->bean->$key = $return_module>$key;
                    }
                }
            //ovde
                $this->bean->name = $return_module->name;
                $this->bean->price_c = $return_module->amount;
                    $_POST['is_converted']=true;
            }
            return true;
            }
            function action_editview(){

                $this->view = 'edit';
                return true;
        }
}
/*
$return_module=new Leads();
                $return_module>retrieve($_REQUEST['return_id']);
                foreach($return_module>field_defs as $key=>$value)
                {
                    if ($key == 'id' or $key=='deleted' )continue;
                    if (isset($this->bean->field_defs[$key])) {
                        $this->bean->$key = $return_module>$key;
                    }
                }

*/
?>
