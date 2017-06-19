<?php

session_start();
include '../config/config.php';

$username = mysqli_real_escape_string($dbc, htmlentities($_POST['username']));

if(isset($_POST['submit'])) {

    $username = mysqli_real_escape_string($dbc, htmlentities($_POST['username']));
    $email = mysqli_real_escape_string($dbc, htmlentities($_POST['email']));
    $password = mysqli_real_escape_string($dbc, htmlentities($_POST['password']));
    $hashed_password = hash('sha512', $password);

    $query = "SELECT username FROM users WHERE username = '$username'";
    $result = mysqli_query($dbc, $query) or die('CMS Failed -> Query error.');
    $bestaat_al = mysqli_num_rows($result);

    if($bestaat_al > 0) {
      echo "<script>alert('Deze gebruikersnaam bestaat al!')</script>
      <script>window.open('../registreren','_self')</script>";
    } else {

    $sel_user = "INSERT INTO users VALUES(0, '$username', '$hashed_password', '$email', 1)";
    $run_user = mysqli_query($dbc, $sel_user);

      $_SESSION['username']=$username;
      echo "<script>window.open('../index','_self')</script>";
    }
  }


 ?>
