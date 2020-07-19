
{if strlen($fields.quartal_c.value) <= 0}
{assign var="value" value=$fields.quartal_c.default_value }
{else}
{assign var="value" value=$fields.quartal_c.value }
{/if}  
<input type='text' name='{$fields.quartal_c.name}' 
id='{$fields.quartal_c.name}' size='30' maxlength='255' value='{sugar_number_format precision=0 var=$value}' title='' tabindex='1'    >