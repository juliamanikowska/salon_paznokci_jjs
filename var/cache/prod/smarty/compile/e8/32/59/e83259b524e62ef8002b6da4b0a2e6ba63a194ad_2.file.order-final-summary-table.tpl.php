<?php
/* Smarty version 4.3.4, created on 2025-03-19 10:48:48
  from 'C:\xampp\htdocs\salon_paznokci_jjs\themes\classic\templates\checkout\_partials\order-final-summary-table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67da9300bc3110_05126449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e83259b524e62ef8002b6da4b0a2e6ba63a194ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\salon_paznokci_jjs\\themes\\classic\\templates\\checkout\\_partials\\order-final-summary-table.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67da9300bc3110_05126449 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206882386767da9300bbf785_60049766', 'order-items-table-head');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'checkout/_partials/order-confirmation-table.tpl');
}
/* {block 'order-items-table-head'} */
class Block_206882386767da9300bbf785_60049766 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'order-items-table-head' => 
  array (
    0 => 'Block_206882386767da9300bbf785_60049766',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="order-items" class="col-md-12">
  <h3 class="card-title h3">
    <?php if ($_smarty_tpl->tpl_vars['products_count']->value == 1) {?>
       <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%product_count% item in your cart','sprintf'=>array('%product_count%'=>$_smarty_tpl->tpl_vars['products_count']->value),'d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

    <?php } else { ?>
       <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%products_count% items in your cart','sprintf'=>array('%products_count%'=>$_smarty_tpl->tpl_vars['products_count']->value),'d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

    <?php }?>
  	<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'cart','params'=>array('action'=>'show')),$_smarty_tpl ) );?>
"><span class="step-edit"><i class="material-icons edit">mode_edit</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'edit','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></a>
  </h3>
</div>
<?php
}
}
/* {/block 'order-items-table-head'} */
}
