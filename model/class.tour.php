<?php
$tours = array();
// Model assign.

// Query-> tour ophalen.

$query = "SELECT * FROM tour ORDER BY id ASC LIMIT $limit_starting_number, $results_per_page";

$result = $dbc->query($query) or die('CMS Error -> Could not get table: "tour"!');

while($text = $result-> fetch_assoc()) {
  $tours[] = $text;
}



?>
