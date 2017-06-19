<?php
/* Smarty version 3.1.30, created on 2017-06-19 12:21:13
  from "C:\Users\Nick\Desktop\Bewijzenmap\p1.4\PROJECT\views\account.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5947a5998f0be0_17532701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f13d54ee43b8eeb7dc224a692a1cfc438cb2dc37' => 
    array (
      0 => 'C:\\Users\\Nick\\Desktop\\Bewijzenmap\\p1.4\\PROJECT\\views\\account.tpl',
      1 => 1497867516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5947a5998f0be0_17532701 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content__wrapper">
  <div style="text-align: left" class="content__head">Mijn account</div>

  <div class="content__head--border"></div>

  <p>
    Op deze pagina kun je jouw account beheren, let op het verwijderen van je account is permanent!
  </p>
  <form method="post" action="model/class.account.php">
    <input style="background: #F84545" name="submit" type="submit" value="Account verwijderen" />
  </form>
  <br /><br />
</div>
<?php }
}
