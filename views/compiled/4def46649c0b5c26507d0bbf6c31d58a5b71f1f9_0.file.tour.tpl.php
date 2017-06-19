<?php
/* Smarty version 3.1.30, created on 2017-06-14 10:01:05
  from "C:\Users\Nick\Desktop\Bewijzenmap\p1.4\PROJECT\views\tour.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5940ed418cd9a6_08061550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4def46649c0b5c26507d0bbf6c31d58a5b71f1f9' => 
    array (
      0 => 'C:\\Users\\Nick\\Desktop\\Bewijzenmap\\p1.4\\PROJECT\\views\\tour.tpl',
      1 => 1497427263,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5940ed418cd9a6_08061550 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content__wrapper">
  <div style="text-align: left" class="content__head">Tour schema</div>

  <div class="content__head--border"></div>
  <div class="tour__content">

  <div class="tour__content--wrapper">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tours']->value, 'tour');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tour']->value) {
?>
  <div class="tour-item">
    <div class="datum">
      <?php echo $_smarty_tpl->tpl_vars['tour']->value['date'];?>
 - <i class="fa fa-clock-o"></i> <?php echo $_smarty_tpl->tpl_vars['tour']->value['time'];?>

    </div>

      <div class="artiesten">
        <?php echo $_smarty_tpl->tpl_vars['tour']->value['artist'];?>

      </div>

      <div class="locatie">
        <?php echo $_smarty_tpl->tpl_vars['tour']->value['location'];?>

      </div>

      <div class="tickets">
        <a href="#"><i class="fa fa-ticket"></i> TICKETS KOPEN</a>
      </div>
  </div>
        <div class="content__head--border"></div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


  </div>
    </div>

    <div class="pagination">
      <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
/index.php?pagina=tour&page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
"><i class="fa fa-angle-left"></i> Vorige pagina</a>
      <?php }?>

      Huidige pagina: <?php echo $_smarty_tpl->tpl_vars['page']->value;?>


      <?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['number_of_pages']->value) {?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
/index.php?pagina=tour&page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
"><i class="fa fa-angle-right"></i> Volgende pagina</a>
      <?php }?>
    </div>

  </div>
<?php }
}
