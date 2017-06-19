<?php
$releases = array();
// Model assign.

// Query-> releases ophalen.

$query = "SELECT * FROM releases ORDER BY id DESC";
$result = $dbc->query($query) or die('CMS Error -> Could not get table "releases"!');

while($text = $result-> fetch_assoc()) {
  $releases[] = $text;
}


?>
