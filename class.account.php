<?php
session_start();
include '../config/config.php';

$username = $_SESSION['username'];

$query = "DELETE FROM users WHERE username = '$username'";
$result = mysqli_query($dbc, $query) or die('CMS Query -> Failed.');

session_unset();
session_destroy();

header('Location: ../index');


 ?>
