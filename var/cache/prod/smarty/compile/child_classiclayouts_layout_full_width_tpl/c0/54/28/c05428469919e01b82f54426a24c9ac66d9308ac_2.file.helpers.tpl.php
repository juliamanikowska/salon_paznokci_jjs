<?php
/* Smarty version 4.3.4, created on 2025-03-31 12:37:18
  from 'C:\xampp\htdocs\salon_paznokci_jjs\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67ea705e7c3673_95293526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c05428469919e01b82f54426a24c9ac66d9308ac' => 
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
function content_67ea705e7c3673_95293526 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\salon_paznokci_jjs\\var\\cache\\prod\\smarty\\compile\\child_classiclayouts_layout_full_width_tpl\\c0\\54\\28\\c05428469919e01b82f54426a24c9ac66d9308ac_2.file.helpers.tpl.php',
    'uid' => 'c05428469919e01b82f54426a24c9ac66d9308ac',
    'call_name' => 'smarty_template_function_renderLogo_75590137667ea705e7ab2b0_80274323',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_75590137667ea705e7ab2b0_80274323 */
if (!function_exists('smarty_template_function_renderLogo_75590137667ea705e7ab2b0_80274323')) {
function smarty_template_function_renderLogo_75590137667ea705e7ab2b0_80274323(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_renderLogo_75590137667ea705e7ab2b0_80274323 */
}
