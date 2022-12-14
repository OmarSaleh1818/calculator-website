<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

    <link rel ="stylesheet" href="css/style.css">
    <title>SIGN UP</title>
</head>
<body>

    <!-- HEADER -->
    <?php include("includes/header.php");?>
    <!-- /HEADER -->

       <!-- register-->
	<div class="auth-content">
		<form action="includes/signup.inc.php" method="post">
			<h2 class="form-title">Register</h2>

			<div>
				<label>User name</label>
				<input type="text" name="username" placeholder="Username" class="text-input" required>
			</div>
			<div>
				<label>Email</label>
				<input type="email" name="email" placeholder="Email" class="text-input" required>
			</div>
			<div>
				<label>Password</label>
				<input type="password" name="password" placeholder="Password" class="text-input" required>
			</div>
			<div>
				<label>password Confirmation</label>
				<input type="password" name="passwordConf" placeholder="PasswordConfirmation" class="text-input" required>
			</div>
			<div>
				<button type="submit" name="register-btn" class="btn btn-big">Register</button>
			</div>
			<p>Or <a href="login.php"> Sign In </a></p>
			
		</form>
	</div>
	<!-- /register-->

</body>
</html>