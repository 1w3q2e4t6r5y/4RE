
<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="index.css">

	<!-- CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<!-- jQuery and JS bundle w/ Popper.js -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
		crossorigin="anonymous"></script>
</head>

<body>

	<div class="position-fixed w-100 h-100 d-flex justify-conntent-center align-items-center">
		<div class="main">
			<div class="col1 col-6">
				<h2>Don't have an account?</h2>
				<p>Lorem ipsum dolor sit ametarum atque mollitia.</p>
				<button onclick="SingUp();">Sing up</button>
			</div>
			<div class="col2 col-6">
				<h2>Have an account?</h2>
				<p>Lorem ipsum dolor sit ametarum atque mollitia.</p>
				<button onclick="Login(); ">Login</button>
			</div>

			<div class="whiteElement" id="whiteElement">
				<div class="reg" id="reg">
					<h2>Sing up</h2><span class="logo"><img src="Images/logo.png"></span>
					<form class="f-r" action="control/registration.php" method="post" enctype="multipart/form-data"
						autocomplete="off">

						<div class="alert alert-error"><?= $_SESSION['message']?></div>
						<p>Username</p>
						<input type="text" class="regs" name="username" required /><img src="Images/personal-information.svg"
							class="icon ">
						<p>Email</p><input type="email" class="regs" name="email" required /><img src="Images/new-email.svg"
							class="icon ">
						<p>Password</p><input type="password" class="regs" name="password" autocomplete="new-password"
							required /><img src="Images/lock.svg" class="icon ">

						<input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
					</form>
				</div>
				<div class="log" id="loghidden">
					<h2>Login</h2><span class="logo"><img src="Images/logo.png"></span>
					<form class="fl" action="control/login.php" method="post" enctype="multipart/form-data"
						autocomplete="off">
						
						<p>Email</p>
						<input type="email" placeholder="" name="email" required /><img src="Images/new-email.svg"
							class="icon ">
						<p>Password</p>
						<input type="password" placeholder="" name="password" autocomplete="new-password" required /><img
							src="Images/lock.svg" class="icon ">
						<br><input type="submit" value="login" name="login" class="btn btn-block btn-primary" /><a
							href="#">Forgot?</a>
					</form>
				</div>
			</div>


		</div>
	</div>

	<script src="animations/animation.js">
	</script>

</body>

</html>