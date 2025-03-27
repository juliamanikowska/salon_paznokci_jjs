<?php
/* Smarty version 4.3.4, created on 2025-03-19 10:48:48
  from 'C:\xampp\htdocs\salon_paznokci_jjs\themes\classic\templates\catalog\_partials\miniatures\pack-product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67da9300448a40_63630761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e610178f252c35b57fea7a572308bdd07db3673' => 
    array (
      0 => 'C:\\xampp\\htdocs\\salon_paznokci_jjs\\themes\\classic\\templates\\catalog\\_partials\\miniatures\\pack-product.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67da9300448a40_63630761 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13546616467da93004368a0_27154420', 'pack_miniature_item');
?>

<?php }
/* {block 'pack_miniature_item'} */
class Block_13546616467da93004368a0_27154420 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pack_miniature_item' => 
  array (
    0 => 'Block_13546616467da93004368a0_27154420',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <article>
    <div class="card">
      <div class="pack-product-container">
        <div class="thumb-mask">
          <div class="mask">
            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
              <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['medium'])) {?>
                <picture>
                  <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['medium']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['medium']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
                  <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['medium']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['medium']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
                  <img
                          src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['medium']['url'], ENT_QUOTES, 'UTF-8');?>
"
                          <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['legend'])) {?>
                            alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['legend'], ENT_QUOTES, 'UTF-8');?>
"
                            title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['legend'], ENT_QUOTES, 'UTF-8');?>
"
                          <?php } else { ?>
                            alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                          <?php }?>
                          loading="lazy"
                          data-full-size-image-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
                  >
                </picture>
              <?php } else { ?>
                <picture>
                  <?php if (!empty($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['medium_default']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['medium_default']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
                  <?php if (!empty($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['medium_default']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['medium_default']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
                  <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" />
                </picture>
              <?php }?>
            </a>
          </div>
        </div>

        <div class="pack-product-name">
          <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>

          </a>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['showPackProductsPrice']->value) {?>
          <div class="pack-product-price">
            <strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</strong>
          </div>
        <?php }?>

        <div class="pack-product-quantity">
          <span>x <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['pack_quantity'], ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
      </div>
    </div>
  </article>
<?php
}
}
/* {/block 'pack_miniature_item'} */
}
