<?php
session_start();
require('db/connect.php');

if(isset ($_SESSION['username'])){
	
$username= $_SESSION['username'];
$id= $_SESSION['id'];

echo "<pre>Hello  $username </pre>";

	
echo"
<link rel='stylesheet' href='index.css' type='text/css'>
<form class='form' action='control/SetAtr.php' method='post' enctype='multipart/form-data' autocomplete='off'>
<input type='text' placeholder='Attribute' name='Attribute' required />
<input type='text' placeholder='information about attribute' name='Attribute_info' autocomplete='new-password' required />
<input type='submit' value='Set Atribute' name='login' class='btn btn-block btn-primary' />
</form>
";

$query = "SELECT * FROM userinformation WHERE user_id ='$id'";
$result= mysqli_query($connection,$query) or die(mysqli_error($connection));
echo "<div class='col1'><h1>information about you</h1></div>";
  

while($row = mysqli_fetch_array($result))
{
$Atr=$row['Atr_name'];
$AtrInf=$row['Atr_inf'];
echo "<div class='col'><h1>$Atr :</h1><br><p>$AtrInf</p></div>";
}

echo "<a href='control/logout.php' class'btn btn-lg btn-primary'>logout</a>";
}
else{
session_destroy();
}


?>