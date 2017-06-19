<?php
/* Smarty version 3.1.30, created on 2017-06-11 23:44:45
  from "C:\xampp\htdocs\views\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593db9cdd5c2e0_80955455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0211cc0201a8ace51f7ac60a089e0f870bd86018' => 
    array (
      0 => 'C:\\xampp\\htdocs\\views\\index.tpl',
      1 => 1497217482,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593db9cdd5c2e0_80955455 (Smarty_Internal_Template $_smarty_tpl) {
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

    <div class="example-2 card">
  <div style="background: url(/assets/images/nieuws/everybody.jpg) center center no-repeat;" class="wrapper">
    <div style="background: rgba(0, 0, 0, 0.3)" class="header">
      <div class="date">
        <span class="day"><i class="fa fa-clock-o"></i> 11</span>
        <span class="month">Juni</span>
        <span class="year">2017</span>
      </div>
      <ul class="menu-content">
        <li>
          <a href="#" class="fa fa-heart-o"><span>3</span></a>
        </li>
        <li><a href="#" class="fa fa-comment-o"><span>3</span></a></li>
      </ul>
    </div>
    <div style="background: rgba(0, 0, 0, 0.6)" class="data">
      <div class="content">
        <span class="author">Nick Meijer</span>
        <h1 class="title"><a href="#">Logic's nieuwe album ΞVERYBODY nu overal te beluisteren!</a></h1>
        <p class="text">Inmiddels al 196,000 album's verkocht, 247,000 units in het US Billboard.
          Ook heeft dit album het record van grootste tweede week release verbroken, met maarliefst 8.000 verkochte kopies.</p>
        <a href="#" class="button">Lees meer</a>
      </div>
    </div>
  </div>
</div>
</div>


  </div>
</div>
<?php }
}
