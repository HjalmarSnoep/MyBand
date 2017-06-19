<?php
/* Smarty version 3.1.30, created on 2017-06-13 09:06:48
  from "C:\Users\Nick\Desktop\Bewijzenmap\p1.4\PROJECT\views\releases.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593f8f0855bd61_60102131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4a3458d2c85416e3afb217d4a1b089c783e55b8' => 
    array (
      0 => 'C:\\Users\\Nick\\Desktop\\Bewijzenmap\\p1.4\\PROJECT\\views\\releases.tpl',
      1 => 1497337605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593f8f0855bd61_60102131 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div style="text-align: center" class="content__wrapper">
  <div style="text-align: left" class="content__head">Nieuwste releases</div>
  <div class="content__head--border"></div>

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['releases']->value, 'release');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['release']->value) {
?>
  <div class="release-item">
    <div style="
    background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('./assets/images/releases/<?php echo $_smarty_tpl->tpl_vars['release']->value['cover'];?>
');
     background-position: ceter center; background-repeat: no-repeat"
      class="release-cover">
      <div class="album-name">
        <?php echo $_smarty_tpl->tpl_vars['release']->value['name'];?>

      </div>
      <div class="release-date">
        <?php echo $_smarty_tpl->tpl_vars['release']->value['date'];?>

      </div>

      </div>
<div class="iframe">
  <iframe src="<?php echo $_smarty_tpl->tpl_vars['release']->value['widget_url'];?>
" width="400" height="400" frameborder="0" allowtransparency="true"></iframe>

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
