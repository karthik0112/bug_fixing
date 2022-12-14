<?php
/* Smarty version 3.1.33, created on 2022-12-14 10:27:16
  from '/var/www/html/modules/remote_smtp/themes/default/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_639957acebd123_58691463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db6144f191ce8377a9307b2c79118ed56b221ce0' => 
    array (
      0 => '/var/www/html/modules/remote_smtp/themes/default/form.tpl',
      1 => 1621513375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639957acebd123_58691463 (Smarty_Internal_Template $_smarty_tpl) {
?><table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
        <td>
            <input class="button" name="save" value="<?php echo $_smarty_tpl->tpl_vars['CONFIGURATION_UPDATE']->value;?>
" type="submit" />&nbsp;&nbsp;
        </td>
        <td align="right" nowrap><span class="letra12"><span  class="required">*</span> <?php echo $_smarty_tpl->tpl_vars['REQUIRED_FIELD']->value;?>
</span></td>
    </tr>
</table>
<table class="tabForm" style="font-size: 16px;" cellspacing="0" cellpadding="0" width="99%" >
    <tr class="letra12">
        <td align="left" width="9%"><b><?php echo $_smarty_tpl->tpl_vars['status']->value['LABEL'];?>
:</b></td>
        <td align="left" width="34%"><?php echo $_smarty_tpl->tpl_vars['status']->value['INPUT'];?>
</td>
        <td rowspan='5' width="40%"><?php echo $_smarty_tpl->tpl_vars['MSG_REMOTE_SMTP']->value;?>
</td>
        <td rowspan="5" width="10%">&nbsp;</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['SMTP_Server']->value['LABEL'];?>
:</b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['SMTP_Server']->value['INPUT'];?>
</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['relayhost']->value['LABEL'];?>
: <span class="required">*</span></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['relayhost']->value['INPUT'];?>
</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['port']->value['LABEL'];?>
: <span class="required">*</span></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['port']->value['INPUT'];?>
</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['user']->value['LABEL'];?>
: <span class="required validpass">*</span></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['user']->value['INPUT'];?>
 &nbsp;&nbsp;&nbsp;&nbsp;(<?php echo $_smarty_tpl->tpl_vars['Example']->value;?>
. <span id="example">example@domain.com</span>)</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['password']->value['LABEL'];?>
: <span class="required validpass">*</span></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['password']->value['INPUT'];?>
</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['autentification']->value['LABEL'];?>
: </b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['autentification']->value['INPUT'];
echo $_smarty_tpl->tpl_vars['MSG_REMOTE_AUT']->value;?>
</td>
    </tr>
</table>

<input type="hidden" name="lbldomain" id="lbldomain" value="<?php echo $_smarty_tpl->tpl_vars['lbldomain']->value;?>
"/>
<?php }
}
