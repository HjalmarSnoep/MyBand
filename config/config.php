<?php

// Declare global site variables.
if(empty($_GET['pagina'])) {
  $huidige_pagina = "Welkom";
} else {
  $huidige_pagina = ucfirst($_GET['pagina']);
}


$titel = "Logic - " . $huidige_pagina;


 ?>
