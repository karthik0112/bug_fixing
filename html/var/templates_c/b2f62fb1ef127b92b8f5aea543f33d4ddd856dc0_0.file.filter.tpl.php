<?php
/* Smarty version 3.1.33, created on 2022-12-14 10:27:17
  from '/var/www/html/modules/email_list/themes/default/filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_639957adced4c6_80995523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2f62fb1ef127b92b8f5aea543f33d4ddd856dc0' => 
    array (
      0 => '/var/www/html/modules/email_list/themes/default/filter.tpl',
      1 => 1621513375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639957adced4c6_80995523 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['VirtualDomains']->value) {?>
    <table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
	<tr class="letra12">
	    <td width="5%" align="right"><?php echo $_smarty_tpl->tpl_vars['domain']->value['LABEL'];?>
: </td>
	    <td align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['domain']->value['INPUT'];?>
</td>
	</tr>
    </table>
<?php }
}
}
