<?php
/* Smarty version 4.3.4, created on 2025-03-26 10:30:16
  from 'C:\xampp\htdocs\salon_paznokci_jjs\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67e3c9289e5434_96359775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '271cc1184792fc2191913710f9efe390ddd7e3cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\salon_paznokci_jjs\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67e3c9289e5434_96359775 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\salon_paznokci_jjs\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\27\\1c\\c1\\271cc1184792fc2191913710f9efe390ddd7e3cb_2.file.helpers.tpl.php',
    'uid' => '271cc1184792fc2191913710f9efe390ddd7e3cb',
    'call_name' => 'smarty_template_function_renderLogo_193236588867e3c9289d2667_01192832',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_193236588867e3c9289d2667_01192832 */
if (!function_exists('smarty_template_function_renderLogo_193236588867e3c9289d2667_01192832')) {
function smarty_template_function_renderLogo_193236588867e3c9289d2667_01192832(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_193236588867e3c9289d2667_01192832 */
}
