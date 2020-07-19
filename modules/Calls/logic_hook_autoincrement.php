<?php


class AutoLogicHook{

function auto_increment($bean, $event, $arguments){
	
    $a=rand ( 0, 100000);
    $bean->name = "Poziv-$a";

	

      }
 }
?>