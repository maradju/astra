<?php

//Hide Subpanel view Leads and member Organizations
unset($layout_defs['Contacts']['subpanel_setup']['activities']);
unset($layout_defs['Contacts']['subpanel_setup']['history']);
unset($layout_defs['Contacts']['subpanel_setup']['cases']);
unset($layout_defs['Contacts']['subpanel_setup']['bugs']);
unset($layout_defs['Contacts']['subpanel_setup']['project']);
unset($layout_defs['Contacts']['subpanel_setup']['campaigns']);
unset($layout_defs['Contacts']['subpanel_setup']['opportunities']);
unset($layout_defs['Contacts']['subpanel_setup']['contact_aos_quotes']);
unset($layout_defs['Contacts']['subpanel_setup']['contact_aos_invoices']);
unset($layout_defs['Contacts']['subpanel_setup']['contact_aos_contracts']);
unset($layout_defs['Contacts']['subpanel_setup']['fp_events_contacts']);
unset($layout_defs['Contacts']['subpanel_setup']['securitygroups']);
unset($layout_defs['Contacts']['subpanel_setup']['contacts']);



//unset($layout_defs['Accounts']['subpanel_setup']['accounts']);//unset_relationship.php