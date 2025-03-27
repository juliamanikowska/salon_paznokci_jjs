<?php
/* Smarty version 4.3.4, created on 2025-03-19 10:48:44
  from 'C:\xampp\htdocs\salon_paznokci_jjs\admin\themes\default\template\controllers\tax_rules\helpers\list\list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67da92fc8f5416_14599521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd70fbf6d598fea3a5f15f3d165f0c3fa01ec2a01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\salon_paznokci_jjs\\admin\\themes\\default\\template\\controllers\\tax_rules\\helpers\\list\\list_action_edit.tpl',
      1 => 1732871137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67da92fc8f5416_14599521 (Smarty_Internal_Template $_smarty_tpl) {
?><a onclick="loadTaxRule('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
'); return false;" href="#" class="btn btn-default">
	<i class="icon-pencil"></i>
	<?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }
}
