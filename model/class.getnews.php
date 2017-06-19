<?php
$index_news = array();
// Model assign.

// Query-> nieuws ophalen.

$query = "SELECT * FROM cms_news ORDER BY id DESC LIMIT 1";
$result = $dbc->query($query) or die('CMS Error -> Could not get table "cms_news"!');

while($text = $result-> fetch_assoc()) {
  $index_news[] = $text;
}


?>
