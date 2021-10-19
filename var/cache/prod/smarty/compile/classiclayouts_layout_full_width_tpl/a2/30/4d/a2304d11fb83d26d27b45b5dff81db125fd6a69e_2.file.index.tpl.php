<?php
/* Smarty version 3.1.39, created on 2021-10-19 17:22:13
  from 'C:\xampp\htdocs\tiendasarita\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616f45156b39f5_43805659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2304d11fb83d26d27b45b5dff81db125fd6a69e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tiendasarita\\themes\\classic\\templates\\index.tpl',
      1 => 1633381914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616f45156b39f5_43805659 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1825973878616f45156b0b25_37121159', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_2133152495616f45156b11e2_47081830 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1921754384616f45156b2358_61153009 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1677678149616f45156b1da6_56245690 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1921754384616f45156b2358_61153009', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1825973878616f45156b0b25_37121159 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1825973878616f45156b0b25_37121159',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_2133152495616f45156b11e2_47081830',
  ),
  'page_content' => 
  array (
    0 => 'Block_1677678149616f45156b1da6_56245690',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1921754384616f45156b2358_61153009',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2133152495616f45156b11e2_47081830', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1677678149616f45156b1da6_56245690', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
