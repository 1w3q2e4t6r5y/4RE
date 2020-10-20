<?php
session_start();
$_SESSION['message']='';

$mysqli = new mysqli('localhost','mysql','mysql','accounts');

if($_SERVER['REQUEST_METHOD'] == 'POST'){


  if ($_POST['password'] ){


    $username = $mysqli->real_escape_string($_POST['username']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $password = md5($_POST['password']);
 
$_SESSION['username'] = $username;

    $sql = "INSERT INTO users (username, email, password)"
          . "VALUES( '$username', '$email', '$password' )";
          
          if ($mysqli->query($sql) === true){
            $_SESSION['message'] =" Registration is completed";
            header("location: ../index.php");
          }else{
            $_SESSION['message']="User coud not be added!";
          }
 
  }else{
    $_SESSION['message']="Two passwors do not match ";
  }
}


?>