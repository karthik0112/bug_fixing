<?php
/* Smarty version 3.1.33, created on 2022-12-14 10:27:14
  from '/var/www/html/modules/email_relay/themes/default/form_relay.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_639957aa1a6d30_47389807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58b4c9b93978b6ec1b7a18bc40dfcd6c1dd55646' => 
    array (
      0 => '/var/www/html/modules/email_relay/themes/default/form_relay.tpl',
      1 => 1621513375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639957aa1a6d30_47389807 (Smarty_Internal_Template $_smarty_tpl) {
?><form method='POST' action="?menu=email_relay">
 <table width="99%" border="0" cellspacing="0" cellpadding="0" align="center"  class="tabForm">
  <tr>
    <td><i><?php echo $_smarty_tpl->tpl_vars['EMAIL_RELAY_MSG']->value;?>
</i></td>
    <td>
       <textarea name='redes_relay' cols='40' rows='8'><?php echo $_smarty_tpl->tpl_vars['RELAY_CONTENT']->value;?>
</textarea>
    </td>
  </tr>
  <tr>
   <td></td>
    <td align='left'>
      <input type='submit' name='update_relay' value='<?php echo $_smarty_tpl->tpl_vars['APPLY_CHANGES']->value;?>
'>
    </td>
  </tr>
 </table>
</form><?php }
}
