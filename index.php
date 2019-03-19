<?php
//include 'conn.php';
//include 'login.php';
session_start();
echo "welcome to the dashboard";

if(!$_SESSION['user']){
  header("location:login.php");
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Hello from deshboard</h1>
    <a href="logout.php">logout</a>
  </body>
</html>
