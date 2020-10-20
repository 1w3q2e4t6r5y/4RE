<?php
session_start();
$_SESSION['message']='';
require('../db/connect.php');

if(isset($_POST['email']) && isset($_POST['password'])){
  $email=$_POST['email'];
  $password=md5($_POST['password']);
 
  $query = "SELECT * FROM users WHERE email ='$email' and password='$password'";
  $result= mysqli_query($connection,$query) or die(mysqli_error($connection));
  
  while($row = mysqli_fetch_array($result))
{
$username=$row['username'];
$usersurename=$row['usersurename'];
$id=$row['id'];
}

  $count = mysqli_num_rows($result);
  if ($count==1){
   
    $_SESSION['username']=$username;
    $_SESSION['id']=$id;
    $_SESSION['usersurename']=$usersurename;
    
  }
  else{
    echo "hey You have mistakes in your login or password";

    echo "<a href='../index.php' class'btn btn-lg btn-primary'>go back</a>";
    
  }
}else{
  $_SESSION['message'] ="debug";
}
if(isset ($_SESSION['username'])){

  header("location:../welcome.php");
}
?>