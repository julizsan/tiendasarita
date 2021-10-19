<?php
/* Smarty version 3.1.39, created on 2021-10-19 17:10:03
  from 'C:\xampp\htdocs\tiendasarita\admin\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616f423be82530_38942855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '437f8ccdbec80fb4a4599e14026d81e29ba8ff3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tiendasarita\\admin\\themes\\default\\template\\content.tpl',
      1 => 1633381914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616f423be82530_38942855 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
