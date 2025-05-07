<?php
/* Smarty version 4.3.4, created on 2025-05-07 09:15:28
  from 'C:\xampp\htdocs\salon_paznokci_jjs\admin1\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_681b089038f903_82653089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6a06f0a5b3e8f64fe115a393b86d7a455baf004' => 
    array (
      0 => 'C:\\xampp\\htdocs\\salon_paznokci_jjs\\admin1\\themes\\new-theme\\template\\content.tpl',
      1 => 1732871137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_681b089038f903_82653089 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
