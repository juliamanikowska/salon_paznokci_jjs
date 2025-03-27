<?php
/* Smarty version 4.3.4, created on 2025-03-19 10:48:48
  from 'C:\xampp\htdocs\salon_paznokci_jjs\themes\classic\templates\cms\sitemap.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67da9300d57f48_66015030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26bc88cf2d172e4d979cf7d159e1f6491960b8b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\salon_paznokci_jjs\\themes\\classic\\templates\\cms\\sitemap.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cms/_partials/sitemap-nested-list.tpl' => 1,
  ),
),false)) {
function content_67da9300d57f48_66015030 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125158454567da9300d553b2_72288794', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82488382067da9300d56175_57774014', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_125158454567da9300d553b2_72288794 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_125158454567da9300d553b2_72288794',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <span class="sitemap-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sitemap','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content_container'} */
class Block_82488382067da9300d56175_57774014 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_82488382067da9300d56175_57774014',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="container-fluid">
    <div class="row sitemap">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sitemapUrls']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
        <div class="col-md-3">
          <h2><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h2>
          <?php $_smarty_tpl->_subTemplateRender('file:cms/_partials/sitemap-nested-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('links'=>$_smarty_tpl->tpl_vars['group']->value['links']), 0, true);
?>
        </div>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php
}
}
/* {/block 'page_content_container'} */
}
