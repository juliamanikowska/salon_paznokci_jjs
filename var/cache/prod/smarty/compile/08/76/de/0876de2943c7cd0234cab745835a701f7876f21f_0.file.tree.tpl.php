<?php
/* Smarty version 4.3.4, created on 2025-03-19 10:48:45
  from 'C:\xampp\htdocs\salon_paznokci_jjs\admin\themes\default\template\helpers\tree\tree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67da92fd418736_46930128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0876de2943c7cd0234cab745835a701f7876f21f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\salon_paznokci_jjs\\admin\\themes\\default\\template\\helpers\\tree\\tree.tpl',
      1 => 1732871137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67da92fd418736_46930128 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel">
	<?php if ((isset($_smarty_tpl->tpl_vars['header']->value))) {
echo $_smarty_tpl->tpl_vars['header']->value;
}?>
	<?php if ((isset($_smarty_tpl->tpl_vars['nodes']->value))) {?>
	<ul id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
" class="tree">
		<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

	</ul>
	<?php }?>
</div>
<?php }
}
