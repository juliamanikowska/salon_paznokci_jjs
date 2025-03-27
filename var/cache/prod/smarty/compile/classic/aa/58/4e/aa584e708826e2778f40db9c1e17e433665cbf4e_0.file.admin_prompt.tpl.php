<?php
/* Smarty version 4.3.4, created on 2025-03-27 14:15:53
  from 'C:\xampp\htdocs\salon_paznokci_jjs\modules\klaviyopsautomation\views\templates\hook\admin_prompt.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67e54f89d34370_51001246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa584e708826e2778f40db9c1e17e433665cbf4e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\salon_paznokci_jjs\\modules\\klaviyopsautomation\\views\\templates\\hook\\admin_prompt.tpl',
      1 => 1732871137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67e54f89d34370_51001246 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="klaviyops-admin-prompt">
    <div class="klaviyops-admin-prompt-content">
        <div class="klaviyops-admin-prompt-content-inner">
            <div class="klaviyops-admin-prompt-content-logo">
                <img
                    src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['klaviyo_edition_logo']->value,'htmlall','UTF-8' ));?>
"
                    alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PrestaShop Automation with Klaviyo'),$_smarty_tpl ) );?>
"
                    height="62"
                    width="200"
                    decoding="async"
                    loading="lazy"
                >
            </div>
            <div class="klaviyops-admin-prompt-content-text">
                <?php if ($_smarty_tpl->tpl_vars['heading_text']->value !== null) {?>
                    <div class="h1"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['heading_text']->value,'htmlall','UTF-8' ));?>
</div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['sub_heading_text']->value !== null) {?>
                    <div class="h2"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub_heading_text']->value,'htmlall','UTF-8' ));?>
</div>
                <?php }?>

                <p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info_text']->value,'htmlall','UTF-8' ));?>
</p>
            </div>
        </div>
        <div class="klaviyops-admin-prompt-content-cta">
            <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['klaviyo_link']->value,'htmlall','UTF-8' ));?>
" class="btn" target="_blank" rel="noopener">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Learn more'),$_smarty_tpl ) );?>

            </a>
            <div class="klaviyops-admin-prompt-content-cta-link-wrapper">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Already have an account ?'),$_smarty_tpl ) );?>

                <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['klaviyo_module_link']->value,'htmlall','UTF-8' ));?>
" class="klaviyops-admin-prompt-content-cta-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Get started here.'),$_smarty_tpl ) );?>
</a>
            </div>
        </div>
    </div>
</div>
<?php }
}
