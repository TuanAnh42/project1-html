<?php

require_once('../utils/p-title.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= PAGE_TITLE ?></title>
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../style/sign.css">
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script src="../js/app.js" defer></script>
</head>

<body>
	<div class="return-home">
		<button onclick="window.location.href = '../index.php'">Back to Home</button>
	</div>
	<div class="bg">

	</div>
	<div class="log-wrapper">

		<ul class="h-tab">
			<li id="signin-btn" class="active">Sign In</li>
			<li>|</li>
			<li id="signup-btn">Sign Up</li>
		</ul>
		<div class="signin-form">
			<form name="signin" action="sign-process.php?action=signin" method="POST">
				<div class="form-group">
					<label for="">Email</label>
					<input type="email" name="email_in" class="form-input" placeholder="Email" required required autocomplete="off">
				</div>
				<div class="form-group">
					<label for="">Password</label>
					<div class="main-input">
						<input type="password" name="pwd_in" class="form-input" placeholder="Password" required required autocomplete="off">
						<div class="eye">
							<i class="far fa-eye"></i>
						</div>
					</div>
				</div>

				<button type="submit" class="form-submit">Sign In</button>

			</form>
		</div>
		<div class="signup-form">
			<form name="signup" action="sign-process.php?action=signup" method="POST">
				<div class="form-group">
					<label for="">Identity Card</label>
					<input type="text" name="id" class="form-input" placeholder="Identity Card" required autocomplete="off">
				</div>
				<div class="form-group">
					<label for="">User Name</label>
					<input type="text" name="username" class="form-input" placeholder="User Name" required required autocomplete="off">
				</div>
				<div class="form-group">
					<label for="">Phone</label>
					<input type="text" name="phonenumber" class="form-input" placeholder="Phone Number" required required autocomplete="off">
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input type="text" name="email" class="form-input" placeholder="Email" required required autocomplete="off">
				</div>
				<div class="form-group">
					<label for="">Address</label>
					<input type="text" name="address" class="form-input" placeholder="Address" required required autocomplete="off">
				</div>
				<div class="form-group">
					<label for="">Password</label>
					<div class="main-input">
						<input type="password" name="pwd" class="form-input" placeholder="Password" required minlength="8" required autocomplete="off">
						<div class="eye">
							<i class="far fa-eye"></i>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="">Confirm Password</label>
					<div class="main-input">
						<input type="password" name="repwd" class="form-input" placeholder="Password" required required autocomplete="off">
						<div class="eye">
							<i class="far fa-eye"></i>
						</div>
					</div>
				</div>
				<div class="checkbox">
					<input type="checkbox" name="seller_register" value=1>
					<label for="">Register as a seller</label>
				</div>

				<button class="form-submit">Sign Up</button>

			</form>
		</div>
	</div>

	<script>
		document.querySelector('#signin-btn');
		document.querySelector('#signin-btn').addEventListener("click", function() {
			this.classList.add('active');
			document.querySelector('#signup-btn').classList.remove('active');
			document.querySelector('.signin-form').style.display = "block";
			document.querySelector('.signup-form').style.display = "none";
		})
		document.querySelector('#signup-btn').addEventListener("click", function() {
			this.classList.add('active');
			document.querySelector('#signin-btn').classList.remove('active');
			document.querySelector('.signup-form').style.display = "block";
			document.querySelector('.signin-form').style.display = "none";
		})
	</script>
</body>

</html>