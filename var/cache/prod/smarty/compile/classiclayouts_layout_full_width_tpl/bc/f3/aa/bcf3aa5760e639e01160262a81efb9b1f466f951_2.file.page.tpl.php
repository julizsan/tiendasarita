<?php
/* Smarty version 3.1.39, created on 2021-10-19 17:04:25
  from 'C:\xampp\htdocs\tiendasarita\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616f40e9009ae4_38685007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcf3aa5760e639e01160262a81efb9b1f466f951' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tiendasarita\\themes\\classic\\templates\\page.tpl',
      1 => 1633381914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616f40e9009ae4_38685007 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_498623307616f40e9003374_58114850', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_621665857616f40e9004200_54412909 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_2069543879616f40e9003a34_59480666 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_621665857616f40e9004200_54412909', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1640704741616f40e9006cf8_99512484 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1503441494616f40e9007606_23156736 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_396405789616f40e9006674_93115654 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1640704741616f40e9006cf8_99512484', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1503441494616f40e9007606_23156736', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_654847738616f40e9008a41_30557706 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_287900374616f40e9008404_80142485 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_654847738616f40e9008a41_30557706', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_498623307616f40e9003374_58114850 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_498623307616f40e9003374_58114850',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_2069543879616f40e9003a34_59480666',
  ),
  'page_title' => 
  array (
    0 => 'Block_621665857616f40e9004200_54412909',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_396405789616f40e9006674_93115654',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1640704741616f40e9006cf8_99512484',
  ),
  'page_content' => 
  array (
    0 => 'Block_1503441494616f40e9007606_23156736',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_287900374616f40e9008404_80142485',
  ),
  'page_footer' => 
  array (
    0 => 'Block_654847738616f40e9008a41_30557706',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2069543879616f40e9003a34_59480666', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_396405789616f40e9006674_93115654', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_287900374616f40e9008404_80142485', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
