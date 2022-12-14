<?php
/* Smarty version 3.1.33, created on 2022-12-13 17:16:29
  from '/var/www/html/modules/vacations/themes/default/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63986615cc0b86_70648677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06fd1d7e7ce8c47f478c0abf92a897d8fd1ebe6c' => 
    array (
      0 => '/var/www/html/modules/vacations/themes/default/form.tpl',
      1 => 1621513375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63986615cc0b86_70648677 (Smarty_Internal_Template $_smarty_tpl) {
?><table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
        <td align="left">
	    <?php if ($_smarty_tpl->tpl_vars['activate']->value == 'enabled') {?>
	    <input class="button" id="actionVacation" type="submit" name="disactivate" value="<?php echo $_smarty_tpl->tpl_vars['DISACTIVATE_MESSAGE']->value;?>
">
	    <?php } else { ?>
	    <input class="button" id="actionVacation" type="submit" name="activate" value="<?php echo $_smarty_tpl->tpl_vars['ACTIVATE_MESSAGE']->value;?>
">
	    <?php }?>
        </td>
        <td align="right" nowrap><span class="letra12"><span  class="required">*</span> <?php echo $_smarty_tpl->tpl_vars['REQUIRED_FIELD']->value;?>
</span></td>
    </tr>
</table>
<table class="tabForm" width="99%" >
    <tr class="letra12">
        <td align="left" width="10%"><b><?php echo $_smarty_tpl->tpl_vars['DATE']->value;?>
: <span  class="required">*</span></b></td>
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['FROM']->value;?>
</b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['ini_date']->value['INPUT'];?>
&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['TO']->value;?>
</b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['end_date']->value['INPUT'];?>
&nbsp;&nbsp;&nbsp;&nbsp;<b><span id="num_days"><?php echo $_smarty_tpl->tpl_vars['num_days']->value;?>
</span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['days']->value;?>
</b></td>
    </tr>
    <tr class="letra12">
        <td align="left" width="10%"><b><?php echo $_smarty_tpl->tpl_vars['email']->value['LABEL'];?>
: <span  class="required">*</span></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['email']->value['INPUT'];?>
&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['link_emails']->value;?>
</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['subject']->value['LABEL'];?>
: <span  class="required">*</span></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['subject']->value['INPUT'];?>
</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['body']->value['LABEL'];?>
: <span  class="required">*</span></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['body']->value['INPUT'];?>
</td>
    </tr>
</table>
<input class="button" type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" />
<input class="button" type="hidden" name="title_popup" id="title_popup" value="<?php echo $_smarty_tpl->tpl_vars['title_popup']->value;?>
" />
<input type="hidden" id="lblDisactivate" name="lblDisactivate" value="<?php echo $_smarty_tpl->tpl_vars['DISACTIVATE_MESSAGE']->value;?>
" />
<input type="hidden" id="lblActivate" name="lblActivate" value="<?php echo $_smarty_tpl->tpl_vars['ACTIVATE_MESSAGE']->value;?>
" />
<?php }
}
