<?php
class conn{

  public $con;
  public function __construct()
  {

   $pdo = new PDO("mysql:host=localhost;dbname=erp","root","");
   $this->con=$pdo;
  }
public function registration($email,$username,$phone,$pass)
{
  $pass= md5($pass);
  $insert_query= "INSERT INTO registrations(email,username,phone,password) VALUES (:email,:username,:phone,:pass)";
  $stmt=$this->con->prepare($insert_query);
  $stmt->bindParam(':email',$email);
  $stmt->bindParam(':username',$username);
  $stmt->bindParam(':phone',$phone);
  $stmt->bindParam(':pass',$pass);
  $stmt->execute();
  header("location:login.php");


}
public function login($username,$pass)
{
  $login_query = "SELECT*FROM registrations WHERE username=:user AND password=:pass";
  $stmt= $this->con->prepare($login_query);

  $stmt->execute(
    array(
      'user' =>$username,
      ':pass'=> md5($pass)
    )
  );
$result = $stmt->fetchAll();

//echo count($result);
return count($result);
}
}

 ?>
