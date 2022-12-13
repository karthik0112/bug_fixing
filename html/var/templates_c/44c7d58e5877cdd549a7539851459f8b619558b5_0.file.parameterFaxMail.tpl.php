<?php
/* Smarty version 3.1.33, created on 2022-12-13 16:24:06
  from '/var/www/html/modules/email_template/themes/default/parameterFaxMail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_639859ce575f71_43774841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44c7d58e5877cdd549a7539851459f8b619558b5' => 
    array (
      0 => '/var/www/html/modules/email_template/themes/default/parameterFaxMail.tpl',
      1 => 1626122724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639859ce575f71_43774841 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST">
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
  <td>
    <table width="100%" cellpadding="4" cellspacing="0" border="0">
      <tr>
        <td align="left">
          <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'edit') {?>
          <input class="button" type="submit" name="submit_apply_change" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
" >
          <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
"></td>
	  <td align="right" nowrap><span class="letra12"><span  class="required">*</span> <?php echo $_smarty_tpl->tpl_vars['REQUIRED_FIELD']->value;?>
</span></td>
          <?php } else { ?>
          <input class="button" type="submit" name="submit_edit" value="<?php echo $_smarty_tpl->tpl_vars['EDIT_PARAMETERS']->value;?>
"></td>
          <?php }?>          
     </tr>
   </table>
  </td>
</tr>
<tr>
  <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
      <tr>
	<td width="15%"><?php echo $_smarty_tpl->tpl_vars['remite']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'edit') {?><span  class="required">*</span><?php }?></td>
	<td width="30%"><?php echo $_smarty_tpl->tpl_vars['remite']->value['INPUT'];?>
</td>
        <td width="10%" rowspan='3'><?php echo $_smarty_tpl->tpl_vars['content']->value['LABEL'];?>
: </td>
	<td width="30%" rowspan='3'><?php echo $_smarty_tpl->tpl_vars['content']->value['INPUT'];?>
</td>	
      </tr>
      <tr>
        <td width="15%"><?php echo $_smarty_tpl->tpl_vars['remitente']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'edit') {?><span  class="required">*</span><?php }?></td>
	<td width="30%"><?php echo $_smarty_tpl->tpl_vars['remitente']->value['INPUT'];?>
</td>
     </tr>
      <tr>
	<td width="15%"><?php echo $_smarty_tpl->tpl_vars['subject']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'edit') {?><span  class="required">*</span><?php }?></td>
	<td width="30%"><?php echo $_smarty_tpl->tpl_vars['subject']->value['INPUT'];?>
</td>
      </tr>
    </table>
  </td>
</tr>
</table>
</form>
<?php }
}
