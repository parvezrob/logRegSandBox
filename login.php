<?php
include 'conn.php';
$log = new conn();

if (isset($_POST['submit'])) {

  $status = $log->login($_POST['UserName'],$_POST['pass']);

  if($status==1)
  {
    echo $_POST['UserName'];
    $_POST['pass'];
    session_start();
    $_SESSION['user'] ='true';
    header("location:index.php");
  }
}
 ?>


 <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>
      <form class="" action="" method="post">

      <label>UserName</label>
      <input type="text" name="UserName" value=""> <br>

      <label>Password</label>
      <input type="password"name="pass" value="" > <br>

      <input type="submit" name="submit" value="login!"/>
      </form>

    </body>
  </html>
