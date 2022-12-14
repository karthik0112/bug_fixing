<?php
/* Smarty version 3.1.33, created on 2022-12-14 13:16:15
  from '/var/www/html/modules/faxclients/themes/default/form_hosts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63997f4780c414_28317731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0b851613d1547ed7341815c44e82448bf7ca3f3' => 
    array (
      0 => '/var/www/html/modules/faxclients/themes/default/form_hosts.tpl',
      1 => 1626122724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63997f4780c414_28317731 (Smarty_Internal_Template $_smarty_tpl) {
?><form method='POST' action="?menu=faxclients">
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
  <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
	<tr>
	    <td>
		<input class='button' type='submit' name='update_hosts' value='<?php echo $_smarty_tpl->tpl_vars['APPLY_CHANGES']->value;?>
'>
	    </td>
	</tr>
     </table>
  </td>
</tr>
<tr>
  <td>
      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
	  <tr>
	      <td><i><?php echo $_smarty_tpl->tpl_vars['EMAIL_RELAY_MSG']->value;?>
</i></td>
	      <td>
		<textarea name='lista_hosts' cols='40' rows='8'><?php echo $_smarty_tpl->tpl_vars['RELAY_CONTENT']->value;?>
</textarea>
	      </td>
	  </tr>
      </table>
  </td>
</tr>
</table>
</form><?php }
}
