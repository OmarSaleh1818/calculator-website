<?php



if (isset($_POST["login-btn"])){

    $username = $_POST["username"]; 
    $password = $_POST["password"]; 

    include("../connect.php");
    include("../classes/login.class.php");
    include("../controller/login.contr.php");
    $login = new LoginContr($username, $password);

    $login->loginUser();

    header("location: ../index.php?error=none");

}