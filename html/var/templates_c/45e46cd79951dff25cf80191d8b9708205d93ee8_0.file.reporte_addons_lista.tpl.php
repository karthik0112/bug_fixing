<?php
/* Smarty version 3.1.33, created on 2022-12-13 17:23:06
  from '/var/www/html/modules/addons_availables/themes/default/reporte_addons_lista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_639867a25eb8b0_28846540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45e46cd79951dff25cf80191d8b9708205d93ee8' => 
    array (
      0 => '/var/www/html/modules/addons_availables/themes/default/reporte_addons_lista.tpl',
      1 => 1625267528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639867a25eb8b0_28846540 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrData']->value, 'data', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['data']->value) {
?>
  <div class="neo-addons-row">
    <input type="hidden" id="url_moreinfo" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['url_moreinfo'];?>
"/>
    <div class="neo-addons-row-title"><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['data']->value['version'];?>
-<?php echo $_smarty_tpl->tpl_vars['data']->value['release'];?>
</div>
    <div class="neo-addons-row-author"><?php echo $_smarty_tpl->tpl_vars['by']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['developed_by'];?>
</div>
    <div class="neo-addons-row-icon"><img src="<?php echo $_smarty_tpl->tpl_vars['url_images']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['name_rpm'];?>
.jpeg " width="65" height="65" alt="iconaddon" align="absmiddle" /></div>
    <div class="neo-addons-row-desc"><?php echo $_smarty_tpl->tpl_vars['data']->value['description'];?>
</div>
    <div class="neo-addons-row-location"><font style='font-weight:bold;'><?php echo $_smarty_tpl->tpl_vars['location']->value;?>
: </font><?php echo $_smarty_tpl->tpl_vars['data']->value['location'];?>
</div>
    <?php if ($_smarty_tpl->tpl_vars['data']->value['note']) {?>
    <div class="neo-addons-row-note"><font style='font-weight:bold;'><?php echo $_smarty_tpl->tpl_vars['note']->value;?>
: </font><?php echo $_smarty_tpl->tpl_vars['data']->value['note'];?>
</div>
    <?php }?>
    <div class="neo-addons-row-button">
                <input type="hidden" id="name_rpm" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name_rpm'];?>
"/>
        <?php if ($_smarty_tpl->tpl_vars['data']->value['installed_version'] == '') {?>
            <?php if ($_smarty_tpl->tpl_vars['data']->value['is_commercial'] && $_smarty_tpl->tpl_vars['data']->value['fecha_compra'] == 0) {?>
	    <input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['data']->value['name_rpm'];?>
_link" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['url_marketplace'];
echo $_smarty_tpl->tpl_vars['server_key']->value;?>
&referer="/>
	    <?php if ($_smarty_tpl->tpl_vars['data']->value['has_trialversion'] == 1) {?>
	    <div class="neo-addons-row-button-trial-left"><?php echo $_smarty_tpl->tpl_vars['TRIAL']->value;?>
</div><div class="neo-addons-row-button-trial-right"><img width="17" height="17" alt="Install" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/addons_icon_install.png"></div>
	    <?php }?>
            <div class="neo-addons-row-button-buy-left"><?php echo $_smarty_tpl->tpl_vars['BUY']->value;?>
</div>
            <div class="neo-addons-row-button-buy-right"><img src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/addons_icon_buy.png" width="19" height="18" alt="Buy" /></div>
            <?php } else { ?>
            <div class="neo-addons-row-button-install-left"><?php echo $_smarty_tpl->tpl_vars['INSTALL']->value;?>
</div>
            <div class="neo-addons-row-button-install-right"><img src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/addons_icon_install.png" width="17" height="17" alt="Install" /></div>
            <?php }?>
        <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['data']->value['can_update']) {?>
            <div class="neo-addons-row-button-install-left tooltipInfo"><?php echo $_smarty_tpl->tpl_vars['UPDATE']->value;
if (!empty($_smarty_tpl->tpl_vars['data']->value['upgrade_info'])) {?><span><?php echo $_smarty_tpl->tpl_vars['data']->value['upgrade_info'];?>
</span><?php }?></div>
            <div class="neo-addons-row-button-install-right"><img src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/addons_icon_update.png" width="20" height="17" alt="Update" /></div>
        <?php }?>
	<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['data']->value['name_rpm'];?>
_installed" value="yes"/>
        <div class="neo-addons-row-button-uninstall-left"><?php echo $_smarty_tpl->tpl_vars['UNINSTALL']->value;?>
</div>
        <div class="neo-addons-row-button-uninstall-right"><img src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/addons_icon_uninstall.png" width="17" height="17" alt="Uninstall" /></div>
	<?php if ($_smarty_tpl->tpl_vars['data']->value['fecha_compra'] == 0 && $_smarty_tpl->tpl_vars['data']->value['is_commercial']) {?>
	    <input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['data']->value['name_rpm'];?>
_link" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['url_marketplace'];
echo $_smarty_tpl->tpl_vars['server_key']->value;?>
&referer="/>
	    <div class="neo-addons-row-button-buy-left"><?php echo $_smarty_tpl->tpl_vars['BUY']->value;?>
</div>
	    <div class="neo-addons-row-button-buy-right"><img src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/addons_icon_buy.png" width="19" height="18" alt="Buy" /></div>
	<?php }?>
        <?php }?>
    </div>
    <div class="neo-addons-row-moreinfo"><?php echo $_smarty_tpl->tpl_vars['more_info']->value;?>
...</div>
  </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<input type="hidden" name="callback" id="callback" value="" />
<?php }
}
