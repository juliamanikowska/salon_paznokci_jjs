<?php
/* Smarty version 4.3.4, created on 2025-03-27 12:42:08
  from 'C:\xampp\htdocs\salon_paznokci_jjs\admin1\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67e53990b566b1_43162409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a3b6ecc9d15a4f4c84252648b6805f2998e1ae0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\salon_paznokci_jjs\\admin1\\themes\\default\\template\\content.tpl',
      1 => 1732871137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67e53990b566b1_43162409 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
