<?php
/* Smarty version 4.3.4, created on 2025-03-27 12:44:18
  from 'C:\xampp\htdocs\salon_paznokci_jjs\modules\ps_imageslider\views\templates\admin\_configure\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67e53a12bc5a40_07592105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b28bcb09361805cefa3a1fe55ff7c27fac0d9a8d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\salon_paznokci_jjs\\modules\\ps_imageslider\\views\\templates\\admin\\_configure\\helpers\\form\\form.tpl',
      1 => 1705392880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67e53a12bc5a40_07592105 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150752468567e53a12b98369_38451553', "field");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "field"} */
class Block_150752468567e53a12b98369_38451553 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_150752468567e53a12b98369_38451553',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\salon_paznokci_jjs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'file_lang') {?>
		<div class="col-lg-8">
			<div class="form-group">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
					<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
						<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
					<?php }?>
						<div class="col-lg-<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>10<?php } else { ?>12<?php }?>">
							<?php if ((isset($_smarty_tpl->tpl_vars['fields']->value[0]['form']['images']))) {?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['image_baseurl']->value;
echo $_smarty_tpl->tpl_vars['fields']->value[0]['form']['images'][$_smarty_tpl->tpl_vars['language']->value['id_lang']];?>
" class="img-thumbnail" />
							<?php }?>
							<div class="dummyfile input-group">
								<input id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" type="file" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" class="hide-file-upload" />
								<span class="input-group-addon"><i class="icon-file"></i></span>
								<input id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
-name" type="text" class="disabled" name="filename" readonly />
								<span class="input-group-btn">
									<button id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
-selectbutton" type="button" name="submitAddAttachments" class="btn btn-default">
										<i class="icon-folder-open"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose a file','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

									</button>
								</span>
							</div>
						</div>
					<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
						<div class="col-lg-2">
							<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
								<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
$_smarty_tpl->tpl_vars['lang']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->do_else = false;
?>
								<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
</a></li>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>
						</div>
					<?php }?>
					<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
						</div>
					<?php }?>
					<?php echo '<script'; ?>
>
					$(document).ready(function(){
						$('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
-selectbutton').click(function(e){
							$('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
').trigger('click');
						});
						$('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
').change(function(e){
							var val = $(this).val();
							var file = val.split(/[\\/]/);
							$('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
-name').val(file[file.length-1]);
						});
					});
				  <?php echo '</script'; ?>
>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</div>
	<?php }?>
	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "field"} */
}
