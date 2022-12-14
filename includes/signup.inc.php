<?php



if (isset($_POST["register-btn"])){

    //Grabbing The Data
    $username = $_POST["username"]; 
    $email = $_POST["email"]; 
    $password = $_POST["password"]; 
    $passwordConf = $_POST["passwordConf"];

    include("../connect.php");
    include("../classes/signup.class.php");
    include("../controller/signup.contr.php");
    $signup = new SignupContr($username, $email, $password, $passwordConf);

    $signup->signupUser();

    header("location: ../index.php?error=none");



}

