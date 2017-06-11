<?php
require 'libs/Smarty.class.php';
require 'config/engine.php';

if (!empty($_GET['pagina'])) {
  $pagina = $_GET['pagina'];
} else {
  $pagina = "index";
}

$engine->assign('titel', $titel);
$engine->display('header.tpl');
// Current page controller

switch($pagina) {
  case "index":
    require 'model/class.index.php';
    $engine->assign('index_text', $index_text);
    $engine->display('index.tpl');
    break;

  case "contact":
    $engine->display('contact.tpl');
    break;

  default:
    require 'model/class.index.php';
    $engine->assign('index_text', $index_text);
    $engine->display('index.tpl');
    break;
}

$engine->display('footer.tpl');

?>
