<?php
$index_text = array();
// Model assign.

// Query-> text ophalen.

$query = "SELECT * FROM page_texts";
$result = $dbc->query($query) or die('CMS Error -> Could not get table "page_texts"!');

while($text = $result-> fetch_assoc()) {
  $index_text[] = $text;
}


?>
