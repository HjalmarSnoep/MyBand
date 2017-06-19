<?php

session_start();
include '../config/config.php';

$username = mysqli_real_escape_string($dbc, htmlentities($_POST['username']));

if(isset($_POST['submit'])){
    $_SESSION['username'] = $_POST['username'];

    $username = mysqli_real_escape_string($dbc,$_POST['username']);
    $password = mysqli_real_escape_string($dbc,$_POST['password']);
    $hashed_password = hash('sha512', $password);

    $sel_user = "SELECT * FROM users WHERE username='$username' AND password='$hashed_password'";

    $run_user = mysqli_query($dbc, $sel_user);
    $check_user = mysqli_num_rows($run_user);

    if($check_user>0){
      $_SESSION['username']=$username;
      echo "<script>window.open('../index','_self')</script>";
    } else {
      echo "<script>alert('Gebruikersnaam of wachtwoord is incorrect, probeer het opnieuw!')";
      session_unset();
      session_destroy();
    }
  }


 ?>
