<?php
/* Smarty version 3.1.30, created on 2017-06-19 10:06:07
  from "C:\Users\Nick\Desktop\Bewijzenmap\p1.4\PROJECT\views\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594785ef7ba5d6_69243138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '536a88df9c24abe5f2c51bab121743b261ade78f' => 
    array (
      0 => 'C:\\Users\\Nick\\Desktop\\Bewijzenmap\\p1.4\\PROJECT\\views\\index.tpl',
      1 => 1497859564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594785ef7ba5d6_69243138 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content__wrapper">
  <div class="links__content">
    <div class="content__head">Over Logic</div>
    <div class="content__head--border"></div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['index_text']->value, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value) {
?>
    <p>
      <?php echo $_smarty_tpl->tpl_vars['index']->value['index_about_text'];?>

    </p>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </div>

  <div class="rechts__content">
    <div class="content__head">Recent Nieuws</div>
    <div class="content__head--border"></div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['index_news']->value, 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>
    <div class="example-2 card">
  <div style="background: url(./assets/images/nieuws/<?php echo $_smarty_tpl->tpl_vars['news']->value['image'];?>
) center center no-repeat;" class="wrapper">
    <div style="background: rgba(0, 0, 0, 0.3)" class="header">
      <div class="date">
        <span class="day"><i class="fa fa-clock-o"></i> <?php echo $_smarty_tpl->tpl_vars['news']->value['date'];?>
</span>
      </div>
      <ul class="menu-content">

      </ul>
    </div>
    <div style="background: rgba(0, 0, 0, 0.6)" class="data">
      <div class="content">
        <span class="author"><?php echo $_smarty_tpl->tpl_vars['news']->value['author'];?>
</span>
        <h1 class="title"><a href="/nieuws/<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</a></h1>
        <p class="text"><?php echo $_smarty_tpl->tpl_vars['news']->value['description'];?>
</p>
        <br /><br />
      </div>
    </div>
  </div>
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>


  </div>
</div>
<?php }
}
