<?php
/* Smarty version 3.1.33, created on 2022-12-13 17:22:55
  from '/var/www/html/themes/tenant/_common/_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_639867979175d7_68951920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8866b6d7fe5a7acff12db4961af1d76cefc1632f' => 
    array (
      0 => '/var/www/html/themes/tenant/_common/_list.tpl',
      1 => 1638368363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639867979175d7_68951920 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/usr/share/php/Smarty/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
?>
<form class="issabel-standard-formgrid" id="idformgrid" method="POST" style="margin-bottom:0;" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
<input type="submit" name="" value="" style="height: 0; min-height: 0; font-size: 0; width: 0; border: none; outline: none; padding: 0px; margin: 0px; box-sizing: border-box; float: left;" />
    <div class="neo-table-header-row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrActions']->value, 'accion', false, 'k', 'actions', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['accion']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['accion']->value['type'] == 'link') {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['accion']->value['task'];?>
" class="x-neo-table-action" <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['onclick'])) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['accion']->value['onclick'];?>
" <?php }?> >
                    <div class="neo-table-header-row-filter">
                    <button type="button" name="<?php echo $_smarty_tpl->tpl_vars['accion']->value['task'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['accion']->value['alt'];?>
" class="neo-table-toolbar-button" <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['ocolor'])) {?> style="background-color:#<?php echo $_smarty_tpl->tpl_vars['accion']->value['ocolor'];?>
; border:1px solid #<?php echo $_smarty_tpl->tpl_vars['accion']->value['ocolor'];?>
;" <?php }?>>
                       <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['iconclass'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['accion']->value['iconclass'];?>
"></i> <?php } elseif (!empty($_smarty_tpl->tpl_vars['accion']->value['icon'])) {?><img border="0" src="<?php echo $_smarty_tpl->tpl_vars['accion']->value['icon'];?>
" align="absmiddle"  /><?php }
echo $_smarty_tpl->tpl_vars['accion']->value['alt'];?>

                    </button>
                    </div>
                </a>
            <?php } elseif ($_smarty_tpl->tpl_vars['accion']->value['type'] == 'button') {?>
                <div class="neo-table-header-row-filter">
                    <button type="button" name="<?php echo $_smarty_tpl->tpl_vars['accion']->value['task'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['accion']->value['alt'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['onclick'])) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['accion']->value['onclick'];?>
" <?php }?> class="neo-table-toolbar-button" <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['ocolor'])) {?> style="background-color:#<?php echo $_smarty_tpl->tpl_vars['accion']->value['ocolor'];?>
; border:1px solid #<?php echo $_smarty_tpl->tpl_vars['accion']->value['ocolor'];?>
;" <?php }?>>
                       <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['iconclass'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['accion']->value['iconclass'];?>
"></i> <?php } elseif (!empty($_smarty_tpl->tpl_vars['accion']->value['icon'])) {?><img border="0" src="<?php echo $_smarty_tpl->tpl_vars['accion']->value['icon'];?>
" align="absmiddle"  /><?php }
echo $_smarty_tpl->tpl_vars['accion']->value['alt'];?>

                    </button>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['accion']->value['type'] == 'submit') {?>
                <div class="neo-table-header-row-filter">
                    <button type="submit" name="<?php echo $_smarty_tpl->tpl_vars['accion']->value['task'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['accion']->value['alt'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['onclick'])) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['accion']->value['onclick'];?>
" <?php }?> class="neo-table-toolbar-button" <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['ocolor'])) {?> style="background-color:#<?php echo $_smarty_tpl->tpl_vars['accion']->value['ocolor'];?>
; border:1px solid #<?php echo $_smarty_tpl->tpl_vars['accion']->value['ocolor'];?>
;" <?php }?>>
                       <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['iconclass'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['accion']->value['iconclass'];?>
"></i> <?php } elseif (!empty($_smarty_tpl->tpl_vars['accion']->value['icon'])) {?><img border="0" src="<?php echo $_smarty_tpl->tpl_vars['accion']->value['icon'];?>
" align="absmiddle"  /><?php }
echo $_smarty_tpl->tpl_vars['accion']->value['alt'];?>

                    </button>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['accion']->value['type'] == 'text') {?>
                <div class="neo-table-header-row-filter" style="cursor:default">
                    <input type="text"   id="<?php echo $_smarty_tpl->tpl_vars['accion']->value['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['accion']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['accion']->value['value'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['onkeypress'])) {?> onkeypress="<?php echo $_smarty_tpl->tpl_vars['accion']->value['onkeypress'];?>
" <?php }?> style="height:22px" />
                    <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['accion']->value['task'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['accion']->value['alt'];?>
" class="neo-table-action" />
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['accion']->value['type'] == 'combo') {?>
                <div class="neo-table-header-row-filter" style="cursor:default">
                    <select name="<?php echo $_smarty_tpl->tpl_vars['accion']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['accion']->value['name'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['onchange'])) {?> onchange="<?php echo $_smarty_tpl->tpl_vars['accion']->value['onchange'];?>
" <?php }?>>
                        <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['selected'])) {?>
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['accion']->value['arrOptions'],'selected'=>$_smarty_tpl->tpl_vars['accion']->value['selected']),$_smarty_tpl);?>

                        <?php } else { ?>
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['accion']->value['arrOptions']),$_smarty_tpl);?>

                        <?php }?>
                    </select>
                    <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['task'])) {?>
                        <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['accion']->value['task'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['accion']->value['alt'];?>
" class="neo-table-action" />
                    <?php }?>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['accion']->value['type'] == 'html') {?>
                <div class="neo-table-header-row-filter">
                    <?php echo $_smarty_tpl->tpl_vars['accion']->value['html'];?>

                </div>
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php if (!empty($_smarty_tpl->tpl_vars['contentFilter']->value)) {?>
            <button type='button' class="neo-table-button-filter-left">
                <?php if ($_smarty_tpl->tpl_vars['AS_OPTION']->value == 0) {?> <i class='fa fa-filter'></i> <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['AS_OPTION']->value) {?> <?php echo $_smarty_tpl->tpl_vars['MORE_OPTIONS']->value;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['FILTER_GRID_SHOW']->value;?>
 <?php }?>
            </button>
            <button type='button' class='neo-table-button-filter-right' id="neo-table-filter-button-arrow">
               <i class='fa fa-caret-down'></i>
            </button>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['enableExport']->value == true) {?>
            <button type="button" class="neo-table-button-filter-left" id="export_button">
                <i class='fa fa-download'></i> <?php echo $_smarty_tpl->tpl_vars['DOWNLOAD_GRID']->value;?>

            </button>
            <button type='button' class='neo-table-button-filter-right' id="neo-table-button-download-right">
               <i class='fa fa-caret-down'></i>
            </button>

            <div id="subMenuExport" class="subMenu neo-display-none" role="menu" aria-haspopup="true" aria-activedescendant="">
                 <div class="items">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&exportcsv=yes&rawmode=yes">
			<div class="menuItem" role="menuitem" id="CSV" aria-disabled="false">
			    <div>
				<i style="color:#99c" class="fa fa-file-text-o"></i>&nbsp;&nbsp;CSV
			    </div>
			</div>
		    </a>
		    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&exportspreadsheet=yes&rawmode=yes">
			<div class="menuItem" role="menuitem" id="Spread_Sheet" aria-disabled="false">
			    <div>
				<i style="color:green;" class="fa fa-file-excel-o"></i>&nbsp;&nbsp;Spreadsheet
			    </div>
			</div>
		    </a>
		    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&exportpdf=yes&rawmode=yes">
			<div class="menuItem" role="menuitem" id="PDF" aria-disabled="false">
			    <div>
				<i style="color:red;" class="fa fa-file-pdf-o"></i>&nbsp;&nbsp;PDF
			    </div>
			</div>
		    </a>
                </div>
            </div>
        <?php }?>

        <div class="neo-table-header-row-navigation">
            <?php if ($_smarty_tpl->tpl_vars['pagingShow']->value && $_smarty_tpl->tpl_vars['numPage']->value > 1) {?>
                <?php if ($_smarty_tpl->tpl_vars['start']->value <= 1) {?>
                    <i class="fa fa-step-backward" style="color:#ccc;"></i>&nbsp;<i class="fa fa-backward" style="color:#ccc"></i>
                <?php } else { ?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&nav=start&start=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
" class="fa fa-step-backward neo-navigation-arrow-active" alt='<?php echo $_smarty_tpl->tpl_vars['lblStart']->value;?>
'></a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&nav=previous&start=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
" class="fa fa-backward neo-navigation-arrow-active" alt='<?php echo $_smarty_tpl->tpl_vars['lblPrevious']->value;?>
'></a>
                <?php }?>
                &nbsp;<?php echo $_smarty_tpl->tpl_vars['lblPage']->value;?>
&nbsp;
                <input type="text"  value="<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
" size="2" align="absmiddle" name="page" id="pageup" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lblof']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['numPage']->value;?>

                <input type="hidden" value="bypage" name="nav" />
                <?php if ($_smarty_tpl->tpl_vars['end']->value == $_smarty_tpl->tpl_vars['total']->value) {?>
                    <i class="fa fa-forward" style="color:#ccc;"></i>&nbsp;<i class="fa fa-step-forward" style="color:#ccc"></i>
                <?php } else { ?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&nav=next&start=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
" class="fa fa-forward neo-navigation-arrow-active" alt='<?php echo $_smarty_tpl->tpl_vars['lblNext']->value;?>
'></a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&nav=end&start=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
" class="fa fa-step-forward neo-navigation-arrow-active" alt='<?php echo $_smarty_tpl->tpl_vars['lblEnd']->value;?>
'></a>
                <?php }?>
            <?php }?>
        </div>
    </div>

    <?php if (!empty($_smarty_tpl->tpl_vars['contentFilter']->value)) {?>
        <div id="neo-table-header-filterrow" class="neo-display-none">
            <?php echo $_smarty_tpl->tpl_vars['contentFilter']->value;?>

        </div>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['arrFiltersControl']->value)) {?>
        <div class="neo-table-filter-controls">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrFiltersControl']->value, 'filterc', false, 'k', 'filtersctrl', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['filterc']->value) {
?>
                <span class="neo-filter-control"><i><?php echo $_smarty_tpl->tpl_vars['filterc']->value['msg'];?>
</i>&nbsp;
				<?php if ($_smarty_tpl->tpl_vars['filterc']->value['defaultFilter'] == 'no') {?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&name_delete_filters=<?php echo $_smarty_tpl->tpl_vars['filterc']->value['filters'];?>
" style="color:#ccc;text-decoration:none;"><i class="fa fa-remove"></i></a>
				<?php }?>
				</span>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php }?>

            <table class="issabel-standard-table" align="center" width="100%" >
        <thead>
            <tr>
                <?php
$__section_columnNum_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['numColumns']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_columnNum_0_start = min(0, $__section_columnNum_0_loop);
$__section_columnNum_0_total = min(($__section_columnNum_0_loop - $__section_columnNum_0_start), $__section_columnNum_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_columnNum'] = new Smarty_Variable(array());
if ($__section_columnNum_0_total !== 0) {
for ($__section_columnNum_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index'] = $__section_columnNum_0_start; $__section_columnNum_0_iteration <= $__section_columnNum_0_total; $__section_columnNum_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index']++){
?>
                <th><?php echo $_smarty_tpl->tpl_vars['header']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index'] : null)]['name'];?>
&nbsp;</th>
                <?php
}
}
?>
            </tr>
        </thead>
        <tbody>
            <?php if ($_smarty_tpl->tpl_vars['numData']->value > 0) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrData']->value, 'data', false, 'k', 'filas', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_filas']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_filas']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_filas']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_filas']->value['total'];
?>
                <?php if ($_smarty_tpl->tpl_vars['data']->value['ctrl'] == 'separator_line') {?>
                    <tr>
                        <?php if ($_smarty_tpl->tpl_vars['data']->value['start'] > 0) {?>
                            <td colspan="<?php echo $_smarty_tpl->tpl_vars['data']->value['start'];?>
"></td>
                        <?php }?>
                        <?php $_smarty_tpl->_assignInScope('data_start', ((string)$_smarty_tpl->tpl_vars['data']->value['start']));?>
                        <td colspan="<?php echo $_smarty_tpl->tpl_vars['numColumns']->value-$_smarty_tpl->tpl_vars['data']->value['start'];?>
" style='background-color:#AAAAAA;height:1px;'></td>
                    </tr>
                <?php } else { ?>
                    <tr>
                        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_filas']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_filas']->value['last'] : null)) {?>
                            <?php
$__section_columnNum_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['numColumns']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_columnNum_1_start = min(0, $__section_columnNum_1_loop);
$__section_columnNum_1_total = min(($__section_columnNum_1_loop - $__section_columnNum_1_start), $__section_columnNum_1_loop);
$_smarty_tpl->tpl_vars['__smarty_section_columnNum'] = new Smarty_Variable(array());
if ($__section_columnNum_1_total !== 0) {
for ($__section_columnNum_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index'] = $__section_columnNum_1_start; $__section_columnNum_1_iteration <= $__section_columnNum_1_total; $__section_columnNum_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index']++){
?>
                                <td class="table_data_last_row"><?php if ($_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index'] : null)] == '') {?>&nbsp;<?php }
echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index'] : null)];?>
</td>
                            <?php
}
}
?>
                        <?php } else { ?>
                            <?php
$__section_columnNum_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['numColumns']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_columnNum_2_start = min(0, $__section_columnNum_2_loop);
$__section_columnNum_2_total = min(($__section_columnNum_2_loop - $__section_columnNum_2_start), $__section_columnNum_2_loop);
$_smarty_tpl->tpl_vars['__smarty_section_columnNum'] = new Smarty_Variable(array());
if ($__section_columnNum_2_total !== 0) {
for ($__section_columnNum_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index'] = $__section_columnNum_2_start; $__section_columnNum_2_iteration <= $__section_columnNum_2_total; $__section_columnNum_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index']++){
?>
                                <td class="table_data"><?php if ($_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index'] : null)] == '') {?>&nbsp;<?php }
echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index'] : null)];?>
</td>
                            <?php
}
}
?>
                        <?php }?>
                    </tr>
                <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <tr>
                    <td class="table_data" colspan="<?php echo $_smarty_tpl->tpl_vars['numColumns']->value;?>
" align="center"><?php echo $_smarty_tpl->tpl_vars['NO_DATA_FOUND']->value;?>
</td>
                </tr>
            <?php }?>
        </tbody>
            <?php if ($_smarty_tpl->tpl_vars['numData']->value > 3) {?>
        <tfoot>
                <tr>
                    <?php
$__section_columnNum_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['numColumns']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_columnNum_3_start = min(0, $__section_columnNum_3_loop);
$__section_columnNum_3_total = min(($__section_columnNum_3_loop - $__section_columnNum_3_start), $__section_columnNum_3_loop);
$_smarty_tpl->tpl_vars['__smarty_section_columnNum'] = new Smarty_Variable(array());
if ($__section_columnNum_3_total !== 0) {
for ($__section_columnNum_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index'] = $__section_columnNum_3_start; $__section_columnNum_3_iteration <= $__section_columnNum_3_total; $__section_columnNum_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index']++){
?>
                    <th><?php echo $_smarty_tpl->tpl_vars['header']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index'] : null)]['name'];?>
&nbsp;</th>
                    <?php
}
}
?>
                </tr>
        </tfoot>
            <?php }?>
        </table>
    
    <?php if ($_smarty_tpl->tpl_vars['numData']->value > 3 && $_smarty_tpl->tpl_vars['numPage']->value > 1) {?>
        <div class="neo-table-footer-row">
            <div class="neo-table-header-row-navigation">
            <?php if ($_smarty_tpl->tpl_vars['pagingShow']->value && $_smarty_tpl->tpl_vars['numPage']->value > 1) {?>
                <?php if ($_smarty_tpl->tpl_vars['start']->value <= 1) {?>
                    <i class="fa fa-step-backward" style="color:#ccc;"></i>&nbsp;<i class="fa fa-backward" style="color:#ccc"></i>
                <?php } else { ?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&nav=start&start=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
" class="fa fa-step-backward neo-navigation-arrow-active" alt='<?php echo $_smarty_tpl->tpl_vars['lblStart']->value;?>
'></a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&nav=previous&start=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
" class="fa fa-backward neo-navigation-arrow-active" alt='<?php echo $_smarty_tpl->tpl_vars['lblPrevious']->value;?>
'></a>
                <?php }?>
                &nbsp;<?php echo $_smarty_tpl->tpl_vars['lblPage']->value;?>
&nbsp;
                <input type="text"  value="<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
" size="2" align="absmiddle" name="page" id="pagedown" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lblof']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['numPage']->value;?>

                <input type="hidden" value="bypage" name="nav" />
                <?php if ($_smarty_tpl->tpl_vars['end']->value == $_smarty_tpl->tpl_vars['total']->value) {?>
                    <i class="fa fa-forward" style="color:#ccc;"></i>&nbsp;<i class="fa fa-step-forward" style="color:#ccc"></i>
                <?php } else { ?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&nav=next&start=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
" class="fa fa-forward neo-navigation-arrow-active" alt='<?php echo $_smarty_tpl->tpl_vars['lblNext']->value;?>
'></a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&nav=end&start=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
" class="fa fa-step-forward neo-navigation-arrow-active" alt='<?php echo $_smarty_tpl->tpl_vars['lblEnd']->value;?>
'></a>
                <?php }?>
            <?php }?>
            </div>
        </div>
    <?php }?>
</form>

<div class='modal' id='gridModal' tabindex='-1' role='dialog'>
  <div class='modal-dialog <?php echo $_smarty_tpl->tpl_vars['modalClass']->value;?>
' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title'><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'modalTitle');?>
</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body' id='gridModalContent'>
        <?php echo $_smarty_tpl->tpl_vars['modalContent']->value;?>

      </div>
    </div>
  </div>
</div>


<?php echo '<script'; ?>
 type="text/Javascript">
$(document).ready(function() {
    // Sincronizar los dos cuadros de texto de navegación al escribir
    $("[id^=page]").keyup(function(event) {
        var id  = $(this).attr("id");
        var val = $(this).val();

        if(id == "pageup")
            $("#pagedown").val(val);
        else if(id == "pagedown")
            $("#pageup").val(val);
    });

    $("#neo-table-filter-button-arrow").click(function() {

    <?php if ($_smarty_tpl->tpl_vars['AS_OPTION']->value) {?>
        var filter_show = "<?php echo $_smarty_tpl->tpl_vars['MORE_OPTIONS']->value;?>
";
        var filter_hide = "<?php echo $_smarty_tpl->tpl_vars['MORE_OPTIONS']->value;?>
";
    <?php } else { ?>
        var filter_show = "<?php echo $_smarty_tpl->tpl_vars['FILTER_GRID_SHOW']->value;?>
";
        var filter_hide = "<?php echo $_smarty_tpl->tpl_vars['FILTER_GRID_HIDE']->value;?>
";
    <?php }?>


        if($("#neo-table-header-filterrow").data("neo-table-header-filterrow-status")=="visible") {
            $("#neo-table-header-filterrow").addClass("neo-display-none");
            $("#neo-table-label-filter").text(filter_show);
            $("#neo-table-filter-button-arrow i").removeClass("fa-caret-up");
            $("#neo-table-filter-button-arrow i").addClass("fa-caret-down");
            $("#neo-table-header-filterrow").data("neo-table-header-filterrow-status", "hidden");
        } else {
            $("#neo-table-header-filterrow").removeClass("neo-display-none");
            $("#neo-table-label-filter").text(filter_hide);
            $("#neo-table-filter-button-arrow i").removeClass("fa-caret-down");
            $("#neo-table-filter-button-arrow i").addClass("fa-caret-up");
            $("#neo-table-header-filterrow").data("neo-table-header-filterrow-status", "visible");
        }
    });

    $('form.issabel-standard-formgrid>table.issabel-standard-table').each(function() {
        var wt = $(this).find('thead>tr').width();
        $(this).find('thead>tr>th').each(function () {
            var wc = $(this).width();
            var pc = 100.0 * wc / wt;
            $(this).width(pc + "%");
        });
        $(this).colResizable({
            liveDrag:   true,
            marginLeft: "0px"
        });
    });
});


<?php echo $_smarty_tpl->tpl_vars['customJS']->value;?>



<?php echo '</script'; ?>
>


<?php }
}
