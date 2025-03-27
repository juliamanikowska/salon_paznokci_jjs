<?php
/* Smarty version 4.3.4, created on 2025-03-19 10:48:49
  from 'C:\xampp\htdocs\salon_paznokci_jjs\themes\classic\templates\customer\order-follow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67da930103f5d7_36423697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87e291a148c75ac9e698a5b943f4969f5d0562f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\salon_paznokci_jjs\\themes\\classic\\templates\\customer\\order-follow.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67da930103f5d7_36423697 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200291371567da9301032468_15175982', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176465296067da9301033305_35957333', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_title'} */
class Block_200291371567da9301032468_15175982 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_200291371567da9301032468_15175982',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Merchandise returns','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_176465296067da9301033305_35957333 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_176465296067da9301033305_35957333',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h6><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Here is a list of pending merchandise returns','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</h6>

  <?php if ($_smarty_tpl->tpl_vars['ordersReturn']->value && count($_smarty_tpl->tpl_vars['ordersReturn']->value)) {?>
    <table class="table table-striped table-bordered hidden-sm-down">
      <thead class="thead-default">
        <tr>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</th>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Return','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</th>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Package status','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</th>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date issued','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</th>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Returns form','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</th>
        </tr>
      </thead>
      <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ordersReturn']->value, 'return');
$_smarty_tpl->tpl_vars['return']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['return']->value) {
$_smarty_tpl->tpl_vars['return']->do_else = false;
?>
          <tr>
            <td><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return']->value['details_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</a></td>
            <td><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return']->value['return_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return']->value['return_number'], ENT_QUOTES, 'UTF-8');?>
</a></td>
            <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return']->value['state_name'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return']->value['return_date'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td class="text-sm-center">
              <?php if ($_smarty_tpl->tpl_vars['return']->value['print_url']) {?>
                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return']->value['print_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Print out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
              <?php } else { ?>
                -
              <?php }?>
            </td>
          </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </tbody>
    </table>
    <div class="order-returns hidden-md-up">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ordersReturn']->value, 'return');
$_smarty_tpl->tpl_vars['return']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['return']->value) {
$_smarty_tpl->tpl_vars['return']->do_else = false;
?>
        <div class="order-return">
          <ul>
            <li>
              <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</strong>
              <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return']->value['details_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</a>
            </li>
            <li>
              <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Return','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</strong>
              <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return']->value['return_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return']->value['return_number'], ENT_QUOTES, 'UTF-8');?>
</a>
            </li>
            <li>
              <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Package status','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</strong>
              <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return']->value['state_name'], ENT_QUOTES, 'UTF-8');?>

            </li>
            <li>
              <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date issued','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</strong>
              <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return']->value['return_date'], ENT_QUOTES, 'UTF-8');?>

            </li>
            <?php if ($_smarty_tpl->tpl_vars['return']->value['print_url']) {?>
              <li>
                <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Returns form','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</strong>
                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return']->value['print_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Print out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
              </li>
            <?php }?>
          </ul>
        </div>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  <?php } else { ?>
    <div class="alert alert-info" role="alert" data-alert="info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have no merchandise return authorizations.','d'=>'Shop.Notifications.Error'),$_smarty_tpl ) );?>
</div>
  <?php }
}
}
/* {/block 'page_content'} */
}
