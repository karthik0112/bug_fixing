<?php
/* Smarty version 3.1.33, created on 2022-12-13 17:22:59
  from '/var/www/html/modules/addons_availables/themes/default/reporte_addons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6398679bf26092_40923830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '953fce2d54a6712460b33dfa83e2ccb9f28b2da6' => 
    array (
      0 => '/var/www/html/modules/addons_availables/themes/default/reporte_addons.tpl',
      1 => 1625267528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6398679bf26092_40923830 (Smarty_Internal_Template $_smarty_tpl) {
?><div
    id="neo-addons-error-message"
    class="ui-corner-all"
    style="display: none;">
    <p>
        <span class="ui-icon" style="float: left; margin-right: .3em;"></span>
        <span id="neo-addons-error-message-text"></span>
    </p>
</div>
  <div class="neo-addons-header-row">
    <div class="neo-addons-header-row-filter">
      <?php echo $_smarty_tpl->tpl_vars['filter_by']->value;?>
:
      <select id="filter_by" class="neo-addons-header-row-select" name="filter_by" onchange="javascript:do_listarAddons(null)">
        <option value="available"><?php echo $_smarty_tpl->tpl_vars['available']->value;?>
</option>
        <option value="installed"><?php echo $_smarty_tpl->tpl_vars['installed']->value;?>
</option>
        <option value="purchased"><?php echo $_smarty_tpl->tpl_vars['purchased']->value;?>
</option>
        <option value="update_available"><?php echo $_smarty_tpl->tpl_vars['update_available']->value;?>
</option>
      </select>
    </div>
    <div class="neo-addons-header-row-filter">
      <span style="vertical-align:top;"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
:</span>
      <input type="text" id="filter_namerpm" value="" name="filter_namerpm" onkeypress="javascript:keyPressed(event)">
      <a onclick="javascript:do_listarAddons(null)" href="#">
      <img width="19" height="21" border="0" align="absmiddle" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/searchw.png" alt="">
      </a>
    </div>
    <div class="neo-addons-header-row-navigation">
        <img id="imgPrimero" style="cursor: pointer;" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/table-arrow-first.gif" width="16" height="16" alt='<?php echo $_smarty_tpl->tpl_vars['lblStart']->value;?>
' align='absmiddle' />
        <img id="imgAnterior"  style="cursor: pointer;" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/table-arrow-previous.gif" width="16" height="16" alt='<?php echo $_smarty_tpl->tpl_vars['lblPrevious']->value;?>
' align='absmiddle' />
        (<?php echo $_smarty_tpl->tpl_vars['showing']->value;?>
 <span id="addonlist_start_range">?</span> - <span id="addonlist_end_range">?</span> <?php echo $_smarty_tpl->tpl_vars['of']->value;?>
 <span id="addonlist_total">?</span>)
        <img id="imgSiguiente" style="cursor: pointer;" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/table-arrow-next.gif" width="16" height="16" alt='<?php echo $_smarty_tpl->tpl_vars['lblNext']->value;?>
' align='absmiddle' />
        <img id="imgFinal" style="cursor: pointer;" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/table-arrow-last.gif" width="16" height="16" alt='<?php echo $_smarty_tpl->tpl_vars['lblEnd']->value;?>
' align='absmiddle' />
    </div>
  </div>
<div id="addonlist">
<div style="text-align: center; padding: 40px;">
<img src="images/loading.gif" />
</div>
</div>
     <div id="footer" style="background: url(../../../images/addons_header_row_bg.png) repeat-x top; width: 100%; height:40px;"  >
     <div class="neo-addons-header-row-navigation">
        <img id="imgPrimeroFooter" style="cursor: pointer;" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/table-arrow-first.gif" width="16" height="16" alt='<?php echo $_smarty_tpl->tpl_vars['lblStart']->value;?>
' align='absmiddle' />
        <img id="imgAnteriorFooter"  style="cursor: pointer;" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/table-arrow-previous.gif" width="16" height="16" alt='<?php echo $_smarty_tpl->tpl_vars['lblPrevious']->value;?>
' align='absmiddle' />
        (<?php echo $_smarty_tpl->tpl_vars['showing']->value;?>
 <span id="addonlist_start_range_footer">?</span> - <span id="addonlist_end_range_footer">?</span> <?php echo $_smarty_tpl->tpl_vars['of']->value;?>
 <span id="addonlist_total_footer">?</span>)
        <img id="imgSiguienteFooter" style="cursor: pointer;" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/table-arrow-next.gif" width="16" height="16" alt='<?php echo $_smarty_tpl->tpl_vars['lblNext']->value;?>
' align='absmiddle' />
        <img id="imgFinalFooter" style="cursor: pointer;" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/table-arrow-last.gif" width="16" height="16" alt='<?php echo $_smarty_tpl->tpl_vars['lblEnd']->value;?>
' align='absmiddle' />
    </div>
    </div>
<!-- Neo Progress Bar -->
<div class="neo-modal-box">
  <div id="container">
    <div class="neo-progress-bar-percentage"><span class="neo-progress-bar-percentage-tag"></span></div>
    <div class="neo-progress-bar"><div class="neo-progress-bar-progress"></div></div>
    <span class="neo-progress-bar-label"><img src="images/loading2.gif" align="absmiddle" />&nbsp;<span id="feedback"></span></span>
    <div class="neo-progress-bar-title"></div>
    <div class="neo-progress-bar-close"></div>
  </div>
</div>
<div class="neo-modal-blockmask"></div>
<?php }
}
