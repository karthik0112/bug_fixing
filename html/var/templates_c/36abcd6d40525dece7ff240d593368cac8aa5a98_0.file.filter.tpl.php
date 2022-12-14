<?php
/* Smarty version 3.1.33, created on 2022-12-14 13:16:14
  from '/var/www/html/modules/faxviewer/themes/default/filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63997f46396f45_16407448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36abcd6d40525dece7ff240d593368cac8aa5a98' => 
    array (
      0 => '/var/www/html/modules/faxviewer/themes/default/filter.tpl',
      1 => 1626122724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63997f46396f45_16407448 (Smarty_Internal_Template $_smarty_tpl) {
?><table width="100%" border="0" cellspacing="0" cellpadding="4">
    <tr>
        <td width="12%" align="right"><?php echo $_smarty_tpl->tpl_vars['name_company']->value['LABEL'];?>
:</td>
        <td width="10%"align="left"><?php echo $_smarty_tpl->tpl_vars['name_company']->value['INPUT'];?>
</td>
        <td width="12%" align="right"><?php echo $_smarty_tpl->tpl_vars['date_fax']->value['LABEL'];?>
:</td>
        <td width="13%" align="left"><?php echo $_smarty_tpl->tpl_vars['date_fax']->value['INPUT'];?>
</td>
    </tr>
    <tr>
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['fax_company']->value['LABEL'];?>
:</td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['fax_company']->value['INPUT'];?>
</td>
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['filter']->value['LABEL'];?>
</td> 
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['filter']->value['INPUT'];?>
</td>
        <td align="left">
            <input class="button" type="submit" name="buscar" value="<?php echo $_smarty_tpl->tpl_vars['SEARCH']->value;?>
" />
        </td>
    </tr>
</table>
<?php }
}
