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
    <title>SIGN IN </title>
</head>
<body>

    <!-- HEADER -->
    <?php include("includes/header.php");?>
    <!-- /HEADER -->

    <!-- LOG IN -->

    <div class="auth-content">
		<form action="includes/login.inc.php" method="post">
			<h2 class="form-title">Sign In</h2>
			
			<div>
				<label>User name</label>
				<input type="text" name="username"  value= "" class="text-input">
			</div>
			<div>
				<label>Password</label>
				<input type="password" name="password"  value= "" class="text-input">
			</div>
			<div>
				<button type="submit" name="login-btn" class="btn btn-big">Sign In</button>
			</div>
			<p>Or <a href="register.php"> Sign Up </a></p>
			
        </form>
    </div>

    <!-- // LOGIN -->


</body>
</html>