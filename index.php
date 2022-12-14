<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Font awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
      <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
     <!-- //Font Awesome -->

    <!-- Google Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
    <!-- //Google Fonts -->   
    
    <link rel ="stylesheet" href="css/style.css">
    <title>Calculator</title>
</head>
<body>

  <!--HEADER-->
  <?php include("includes/header.php");?>
  <!--/HEADER-->

  <?php
    if(isset($_SESSION["id"])) {
  ?> 
  <div class="auth-content">
		<form action="calc.php" method="post">
			<h1 class="form-title" style="color:#7e3333">My Own Calculator</h1>	
			<div>
				<label>NUMBER 1</label>
				<input type="text" name="num1" class="text-input">
			</div>
			<div>
				<label>NUMBER 2</label>
				<input type="text" name="num2"  class="text-input">
			</div>
			<div>
        <label>Select</label>
        <select class="text-input" name="calc">
            <option selected="">Select option</option>
            <option value="add">ADD</option>
            <option value="subt">SUBTRACT</option>
            <option value="mult">MULTIPLY</option>
            <option value="divid">DIVIDE</option>
            <option value="percent">PERCENTAGE</option>
        </select>
			</div>
			<div>
				<button type="submit" class="btn btn-big">CALCULATE</button>
			</div>	
		</form>
	</div>
  <?php       
    } else {
  ?>  
  <div class="auth-content">
    <form action="includes/login.inc.php" method="post">
      <h2 class="form-title">Sign In</h2>
      
      <div>
        <label>User name</label>
        <input type="text" name="username"  placeholder="Username" class="text-input" required>
      </div>
      <div>
        <label>Password</label>
        <input type="password" name="password"  placeholder="Password" class="text-input" required>
      </div>
      <div>
        <button type="submit" name="login-btn" class="btn btn-big">Sign In</button>
      </div>
      <p>Or <a href="register.php"> Sign Up </a></p>
      
        </form>
    </div>
    <?php
      }
    ?>

  <?php include('includes/footer.php'); ?>

</body>
</html>