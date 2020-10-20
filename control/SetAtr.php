<?php
session_start();
require('../db/connect.php');
if(isset($_POST['Attribute']) && isset($_POST['Attribute_info'])){
	
$Atr = $_POST['Attribute'];
$AtrInf = $_POST['Attribute_info'];
$id= $_SESSION['id'];

$query = "INSERT INTO userinformation (user_id, Atr_name, Atr_inf)
VALUES ('$id', '$Atr', '$AtrInf')";
$result= mysqli_query($connection,$query) or die(mysqli_error($connection));
	
header('Location: ../welcome.php');
}else{
	Echo "you lose";
}

?>