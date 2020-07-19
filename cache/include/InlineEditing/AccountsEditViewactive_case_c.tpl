
{if strval($fields.active_case_c.value) == "1" || strval($fields.active_case_c.value) == "yes" || strval($fields.active_case_c.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="{$fields.active_case_c.name}" value="0"> 
<input type="checkbox" id="{$fields.active_case_c.name}" 
name="{$fields.active_case_c.name}" 
value="1" title='Check if client is active case' tabindex="1" {$checked} >