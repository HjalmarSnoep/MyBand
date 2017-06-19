<?php
session_start();
if(isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
}

require 'libs/Smarty.class.php';
require 'config/engine.php';

if (!empty($_GET['pagina'])) {
  $pagina = $_GET['pagina'];
} else {
  $pagina = "index";
}

$engine->assign('titel', $titel);
$engine->assign('site_url', $site_url);
$engine->assign('username', $username);
$engine->display('header.tpl');
// Current page controller

switch($pagina) {
  case "index":
    require 'model/class.index.php';
    require 'model/class.getnews.php';
    $engine->assign('index_text', $index_text);
    $engine->assign('index_news', $index_news);
    $engine->display('index.tpl');
    break;

  case "releases":
    require 'model/class.releases.php';
    $engine->assign('releases', $releases);
    $engine->display('releases.tpl');
    break;

  case "tour":
    require 'model/class.pagination.php';
    $engine->assign('page', $page);
    $engine->assign('number_of_pages', $number_of_pages);
    require 'model/class.tour.php';
    $engine->assign('tours', $tours);
    $engine->display('tour.tpl');
    break;

  case "nieuws":
    require 'model/class.nieuws.php';
    $engine->display('nieuws.tpl');
    break;

  case "contact":
    require 'model/class.contact.php';
    $engine->display('contact.tpl');
    break;

  case "login":
    $engine->display('login.tpl');
    break;

  case "registreren":
    $engine->display('registreren.tpl');
    break;

  case "account":
    $engine->display('account.tpl');
    break;

  case "uitloggen":
    require 'model/class.uitloggen.php';
    break;

  default:
    require 'model/class.index.php';
    $engine->assign('index_text', $index_text);
    $engine->display('index.tpl');
    break;
}

$engine->display('footer.tpl');

?>
