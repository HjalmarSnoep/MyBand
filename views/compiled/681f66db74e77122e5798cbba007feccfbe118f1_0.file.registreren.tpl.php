<?php
/* Smarty version 3.1.30, created on 2017-06-19 11:57:43
  from "C:\Users\Nick\Desktop\Bewijzenmap\p1.4\PROJECT\views\registreren.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5947a018007a69_08151474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '681f66db74e77122e5798cbba007feccfbe118f1' => 
    array (
      0 => 'C:\\Users\\Nick\\Desktop\\Bewijzenmap\\p1.4\\PROJECT\\views\\registreren.tpl',
      1 => 1497866261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5947a018007a69_08151474 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div style="text-align: center" class="content__wrapper">
  <div class="content__head">Registreren</div>
  <div class="content__head--border"></div>

  <form method="post" action="model/class.registratie.php">
    <input name="username" type="text" placeholder="&#xf2c0; Gebruikersnaam.." required/><br />
    <input name="email" type="email" placeholder="&#xf003; E-mail adres.." required/><br />
    <input name="password" type="password" placeholder="&#xf023; Wachtwoord.." required /><br />
    <input name="submit" type="submit" value="Account maken" />
  </form>
</div>
<?php }
}
