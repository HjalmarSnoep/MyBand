<?php

// Database connectie configureren & opzetten.

define('HOST', 'localhost'); // Default: localhost.
define('USER', 'root'); // Default: root or admin.
define('PASSWORD', 'nick123'); // Your MySQL password / leave empty if password is not set.
define('DATABASE', 'logic'); // Database name you created.

$dbc = mysqli_connect(HOST, USER, PASSWORD, DATABASE) or die(
'
  CMS Error -> Could not make a proper database connection, please check your configuration file at /config/config.php
');

// Declare global site variables.
if(empty($_GET['pagina'])) {
  $huidige_pagina = "Welkom";
} else {
  $huidige_pagina = ucfirst($_GET['pagina']);
}


$titel = "Logic - " . $huidige_pagina;
$site_url = "http://localhost/p1.4/PROJECT";


 ?>
