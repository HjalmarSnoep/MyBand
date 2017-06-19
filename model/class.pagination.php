<?php

$results_per_page = 10;

$query = "SELECT id FROM tour";
$result = $dbc->query($query) or die('CMS Error -> Could not get table "tour"!');
$number_of_results = mysqli_num_rows($result);

$number_of_pages = ceil($number_of_results / $results_per_page);

!isset($_GET['page']) ? $page = 1 : $page = $_GET['page'];

$limit_starting_number = ($page - 1) * $results_per_page;



 ?>
