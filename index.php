<?php
    require_once 'includes/header.php';
	echo "<link  rel = \"stylesheet\"  href = \"includes/css/home.css\" >";
?>
<div class="body">
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="includes/register-inc.php" method="POST">
			<h1>Create Account</h1>
			<input type="text" name= "name" id="username" placeholder="Name" />
			<input type="email" name = "email" placeholder="Email" />
			<input type="password" name = "password" placeholder="Password" />
			<input type="password" name = "confirmPassword" placeholder="Confirm Password" />
			<button name="signup">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="includes/login-inc.php" method="POST">
			<h1>Sign in</h1>
			<input type="text" name ="email" placeholder="Email" />
			<input type="password" name = "password" placeholder="Password" />
			<button name="signin">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello !</h1>
				<p>Enter your details.</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
</div>
<script src="includes/js/index.js">
</script>
<?php
    require_once 'includes/footer.php';
?>