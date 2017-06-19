<?php
/* Smarty version 3.1.30, created on 2017-06-19 11:19:12
  from "C:\Users\Nick\Desktop\Bewijzenmap\p1.4\PROJECT\views\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594797109df9c3_21249453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0398edc45935f5afe1896d76d8bcedbdb5c48340' => 
    array (
      0 => 'C:\\Users\\Nick\\Desktop\\Bewijzenmap\\p1.4\\PROJECT\\views\\login.tpl',
      1 => 1497863950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594797109df9c3_21249453 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div style="text-align: center" class="content__wrapper">
  <div class="content__head">Inloggen</div>
  <div class="content__head--border"></div>

  <form method="post" action="model/class.login.php">
    <input name="username" type="text" placeholder="&#xf2c0; Gebruikersnaam.." required/><br />
    <input name="password" type="password" placeholder="&#xf023; Wachtwoord.." required /><br />
    <input name="submit" type="submit" value="Log in" />
  </form>
</div>
<?php }
}
