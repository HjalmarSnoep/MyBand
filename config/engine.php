<?php

// Smarty setup/start.
$engine = new Smarty();
$engine->template_dir = "views";
$engine->compile_dir = "views/compiled";

// Require site configuration.
require 'config/config.php';

 ?>
