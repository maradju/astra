<?php

class FP_eventsViewEdit extends ViewEdit
{

    public function __construct()
    {
        parent::ViewEdit();
    }
 
  public function display()
    {
        parent::display();


echo <<<EOS
     <script type='text/javascript'>


 $('#reminder_exist_c').parent().parent().hide();
 


      
     </script>
EOS;

   }

 }

