<?php
/* Smarty version 4.3.4, created on 2025-03-19 10:48:48
  from 'C:\xampp\htdocs\salon_paznokci_jjs\themes\classic\templates\catalog\_partials\miniatures\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67da9300417809_98335761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36cd80c51fb150fd6f0dd2a20d955aff402e41f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\salon_paznokci_jjs\\themes\\classic\\templates\\catalog\\_partials\\miniatures\\category.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67da9300417809_98335761 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108778505067da930040dee7_78127901', 'category_miniature_item');
?>

<?php }
/* {block 'category_miniature_item'} */
class Block_108778505067da930040dee7_78127901 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'category_miniature_item' => 
  array (
    0 => 'Block_108778505067da930040dee7_78127901',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section class="category-miniature">
    <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
      <picture>
        <?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['medium']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['medium']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['medium']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['medium']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
        <img
          src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['medium']['url'], ENT_QUOTES, 'UTF-8');?>
"
          alt="<?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['legend'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');
}?>"
          loading="lazy"
          width="250"
          height="250"
        >
      </picture>
    </a>

    <h1 class="h2">
      <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
    </h1>

    <div class="category-description"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
  </section>
<?php
}
}
/* {/block 'category_miniature_item'} */
}
