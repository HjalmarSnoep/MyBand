<?php
/* Smarty version 3.1.30, created on 2017-06-19 11:42:33
  from "C:\Users\Nick\Desktop\Bewijzenmap\p1.4\PROJECT\views\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59479c8904eb68_88574526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '972607b342893abc0eefc771189c4206bf1d07cb' => 
    array (
      0 => 'C:\\Users\\Nick\\Desktop\\Bewijzenmap\\p1.4\\PROJECT\\views\\header.tpl',
      1 => 1497865350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59479c8904eb68_88574526 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $_smarty_tpl->tpl_vars['titel']->value;?>
</title>
    <meta charset="utf-8">
    <meta name="keywords" content="Logic website, ratt, Logic, Logic301, Rattpack, Robert Bryson, Rapper, DefJam, Music, Jesse Andrea, Rubiks cube logic, Maryland" />
    <meta name="author" content="Nick Meijer"/>
    <meta name="description" content="Beginning in his home state of Maryland, upcoming star Logic (born Sir Robert Bryson Hall II) has been crushing the rap scene since he was 17 years old. Logic cites the Wu Tang Clan as his influence in the early days, and his dream is to work with Kanye West." />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Logic" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:description" content="Beginning in his home state of Maryland, upcoming star Logic (born Sir Robert Bryson Hall II) has been crushing the rap scene since he was 17 years old. Logic cites the Wu Tang Clan as his influence in the early days, and his dream is to work with Kanye West." />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
/assets/favicon/logic.jpg" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
/assets/favicon/logic.jpg" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
/assets/favicon/logic.jpg" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
/assets/css/core.min.css"/>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
/assets/jquery/pace.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
/assets/jquery/core.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://use.fontawesome.com/b43063b610.js"><?php echo '</script'; ?>
>
  </head>
  <body>

    <nav>
    <div class="navigation" role="navigation">
    	<div class="nav-bar">
        <div class="mobile-icon">.</div>
        <ul>
          <li><a  href="index"> Welkom</a></li>

          <li><a href="releases">Releases</a></li>

          <li><a href="tour">Tour</a></li>

          <div class="logic-logo">
            Logic
          </div>

          <li><a  href="contact"> Contact</a></li>

          <?php if (isset($_smarty_tpl->tpl_vars['username']->value)) {?>
          <li><a  href="account"><i class="fa fa-user-o" aria-hidden="true"></i> account (<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
)</a></li>

          <li><a href="uitloggen"><i class="fa fa-angle-right" aria-hidden="true"></i> Uitloggen</a></li>
          <?php } else { ?>
          <li><a  href="login"><i class="fa fa-user-o" aria-hidden="true"></i> Login</a></li>

          <li><a href="registreren"><i class="fa fa-angle-right" aria-hidden="true"></i> Registreren</a></li>
          <?php }?>
        </ul>
       </div>
      </div>
      </nav>
      <div class="colored-line"></div>
      <div class="logic-header">
        <div class="page">

          <div id="home-news">
            <div class="home_header">
              <strong><i class="fa fa-ellipsis-h" aria-hidden="true"></i> Welkom</strong>
              <span>op Logic's website.</span>
            </div>
            <div class="home_header">
              <strong><i class="fa fa-map-marker" aria-hidden="true"></i> Tour</strong>
              <span>Binnenkort in amsterdam </span>
            </div>
            <div class="home_header">
              <span><i class="fa fa-headphones"></i> Album.</span>
              <strong>Nieuwe album verkrijgbaar</strong>
            </div>
          </div>
        </div>
      </div>


  </body>
</html>
<?php }
}
