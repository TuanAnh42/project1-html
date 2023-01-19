
	<div id="wrapper">
		<form action="signup-process.php?action=signup" id="form-login" method="POST">
			<h1 class="form-heading">Sign Up</h1>
			<div class="form-group">
				<input type="number" name="id" class="form-input" placeholder="Identity Card">
			</div>
			<div class="form-group">
				<input type="text" name="username" class="form-input" placeholder="User Name">
			</div>
			<div class="form-group">
				<input type="text" name="email" class="form-input" placeholder="Email">
			</div>
			<div class="form-group">
				<input type="password" name="pwd" class="form-input" placeholder="Password">
				<div class="eye">
					<i class="far fa-eye"></i>
				</div>
			</div>
			<div class="form-group">
				<input type="password" name="repwd" class="form-input" placeholder="Password">
				<div class="eye">
					<i class="far fa-eye"></i>
				</div>
			</div>
			<div>
				<p>
					<a href="signin.php" style="color: white;">I have a account</a>
				</p>
			</div>

			<input type="submit" value="Login" class="form-submit">

		</form>
	</div>
