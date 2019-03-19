<?php
include 'conn.php';
$reg= new conn();
if(isset($_POST['submit']))
{
  //echo "succesful";
$reg->registration($_POST['Email'],$_POST['UserName'],$_POST['Phone'],$_POST['password']);
}


 ?>


<!DOCTYPE html>
<html>

  <head>
<title>Assignment</title>
  </head>

<form class="" action="regstration.php" method="post">

    <label>Email :</label>
    <input type="text" name="Email"> <br>

    <label>UserName :</label>
    <input type="text" name="UserName" ><br>

    <label>Phone :</label>
    <input type="text" name="Phone"><br>
    <label>Password :</label>
    <input type="password" name="password" ><br>
    <button type="submit" name="submit">Submit</button>
</form>
<body>

</body>
</html>
