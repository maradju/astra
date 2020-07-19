<?php

class CallsViewEdit extends ViewEdit
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

 // 1. Create the button
var button = document.createElement("button");
button.innerHTML = "Do Something";

// 2. Append somewhere
var body = document.getElementsByTagName("body")[0];
body.appendChild(button);

// 3. Add event handler
button.addEventListener ("click", function() {
  alert("did something");
});

/* Read 

https://css-tricks.com/use-button-element/
*/    

 $('#trafficker_c').parent().parent().hide();
$('#agencies_c').parent().parent().hide();
$('#location_c').parent().parent().hide();
$('#contact_c').parent().parent().hide();
$('#potential_victim_c').parent().parent().hide();
$('#victim_c').parent().parent().hide();
$('#name').parent().parent().hide();
$('#month_c').parent().parent().hide();
$('#quartal_c').parent().parent().hide();


//opcija_c is the name of radio button
$('input[type=radio][name=person_calling_c]').change(function() {
       if (this.value == 'contact') { 

      $('#contact_c').parent().parent().show();
 			$('#potential_victim_c').parent().parent().hide();
      $('#victim_c').parent().parent().hide();
          }
        else if (this.value == 'potential_victim') {

      $('#contact_c').parent().parent().hide();
      $('#potential_victim_c').parent().parent().show();
      $('#victim_c').parent().parent().hide();
          }
               else if (this.value == 'victim') {
                
        $('#contact_c').parent().parent().hide();
        $('#potential_victim_c').parent().parent().hide();
        $('#victim_c').parent().parent().show();
          }

      });


      $('input[type=checkbox][name=person_reporting_trafficker_c]').change(function(){
        if (document.getElementById("person_reporting_trafficker_c").checked == true){
          $('#trafficker_c').parent().parent().show();
        } else {
            $('#trafficker_c').parent().parent().hide();
        }
 });

       $('input[type=checkbox][name=person_reporting_location_c]').change(function(){
        if (document.getElementById("person_reporting_location_c").checked == true){
          $('#location_c').parent().parent().show();
        } else {
            $('#location_c').parent().parent().hide();
  }
 });


       $('input[type=checkbox][name=person_reporting_agency_c]').change(function(){
        if (document.getElementById("person_reporting_agency_c").checked == true){
          $('#agencies_c').parent().parent().show();
        } else {
            $('#agencies_c').parent().parent().hide();
  }

      });




      
     </script>
EOS;

   }

 }
/*       public function preDisplay(){
        parent::preDisplay();
        $this->lv->actionsMenuExtraItems[] = $this->getNewActionMenuItem();
    }

    private function getNewActionMenuItem(){
        global $mod_strings;
        return <<<EOF
        <a href='javascript:void(0)'
        onclick="return sListView.send_form(true, 'Calls', 'index.php?entryPoint=myNewEntryPoint','Please select at least 1 record to proceed.')">
            {$mod_strings['LBL_NEW_ACTION']}
        </a>";
EOF;
    }
}
*/