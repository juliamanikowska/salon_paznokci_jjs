<?php
/* Smarty version 4.3.4, created on 2025-03-27 12:42:08
  from 'C:\xampp\htdocs\salon_paznokci_jjs\modules\ps_mbo\views\templates\hook\dashboard-zone-two.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67e53990a78275_34055034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d904bb9bac080901d8c5defe97e1114dab135c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\salon_paznokci_jjs\\modules\\ps_mbo\\views\\templates\\hook\\dashboard-zone-two.tpl',
      1 => 1732871137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67e53990a78275_34055034 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  if (typeof window.mboCdc == undefined || typeof window.mboCdc == "undefined") {
    if (typeof renderCdcError === 'function') {
      window.$(document).ready(function() {
        renderCdcError($('#cdc-more-module-container'));
      });
    }
  } else {
    const renderMoreModule = window.mboCdc.renderDashboardMoreModule

    const context = <?php echo $_smarty_tpl->tpl_vars['shop_context']->value;?>
;

    renderMoreModule(context, '#cdc-more-module-container')
  }
<?php echo '</script'; ?>
>

<div class="row-margin-bottom cdc-container" id="cdc-more-module-container" data-error-path="<?php echo $_smarty_tpl->tpl_vars['cdcErrorUrl']->value;?>
"></div>
<?php }
}
