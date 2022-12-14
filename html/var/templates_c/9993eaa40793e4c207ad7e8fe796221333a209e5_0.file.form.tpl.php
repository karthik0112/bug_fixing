<?php
/* Smarty version 3.1.33, created on 2022-12-14 10:27:11
  from '/var/www/html/modules/antispam/themes/default/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_639957a718bc01_88695418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9993eaa40793e4c207ad7e8fe796221333a209e5' => 
    array (
      0 => '/var/www/html/modules/antispam/themes/default/form.tpl',
      1 => 1621513375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639957a718bc01_88695418 (Smarty_Internal_Template $_smarty_tpl) {
?><table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
        <td align="left"><input class="button" type="submit" name="update" value="<?php echo $_smarty_tpl->tpl_vars['UPDATE']->value;?>
"></td>
    </tr>
</table>
<table class="tabForm" style="font-size: 16px;" width="99%" >
    <tr class="letra12">
        <td align="left" width="18%"><b><?php echo $_smarty_tpl->tpl_vars['status']->value['LABEL'];?>
: </b></td>
        <td align="left" colspan="2"><?php echo $_smarty_tpl->tpl_vars['status']->value['INPUT'];?>
</td>
    </tr>
    <tr class="letra12">
        <td align="left" width="18%"><b><?php echo $_smarty_tpl->tpl_vars['level']->value;?>
: </b></td>
        <td align="left" width="20%">
            <div>
                <p style="margin: 0px;">
                    <label for="amount"><?php echo $_smarty_tpl->tpl_vars['level']->value;?>
:</label>
                    <span id="amount" name="amount" style="border:0; color:#f6931f; font-weight:bold;"></span>
                </p>
                <div id="slider-range-max"></div>
            </div>
        </td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['LEGEND']->value;?>
</td>
    </tr>
    <tr class="letra12" height="30px">
        <td align="left" width="18%"><b><?php echo $_smarty_tpl->tpl_vars['politica']->value['LABEL'];?>
: </b></td>
        <td align="left" colspan="2"><?php echo $_smarty_tpl->tpl_vars['politica']->value['INPUT'];?>
 &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['header']->value['INPUT'];?>
 &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['time_spam']->value['INPUT'];?>
</td>
    </tr>
</table>

<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['levelNUM']->value;?>
" id="levelnum" name="levelnum" />
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['statusSpam']->value;?>
" id="statusSpam" name="statusSpam" />
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['statusSieve']->value;?>
" id="statusSieve" name="statusSieve" />
<?php }
}
