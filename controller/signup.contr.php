<?php


class SignupContr extends Signup {

    private $username;
    private $email;
    private $password;
    private $passwordConf;

    public function __construct($username, $email, $password, $passwordConf) {

        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->passwordConf = $passwordConf;

    }

    public function signupUser() {
       if($this->emptyInput() == false) {
            header("location: ../index.php?error=emptyinput");
            exit();
       }

       if($this->invalidUsername() == false) {
        header("location: ../index.php?error=username");
        exit();
        }

        if($this->invalidEmail() == false) {
            header("location: ../index.php?error=email");
            exit();
        }

        if($this->passwordMatch() == false) {
            header("location: ../index.php?error=passwordMatch");
            exit();
        }

        if($this->usernameCheck() == false) {
            header("location: ../index.php?error=usernameoremailTaken");
            exit();
        }

        $this->setUser($this->username, $this->password, $this->email);
    }

    private function emptyInput() {
        $result;
        if(empty($this->username) || empty($this->email) || 
        empty($this->password) || empty($this->passwordConf)) {
            $result = false ; 
        } else {
            $result = true ;
        }
        return $result ;
    }

    private function invalidUsername() {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->username)) {
            $result = false;
        } else {
            $result = true ;
        }
        return $result;
    }

    private function invalidEmail() {
        $result;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true ;
        }
        return $result;
    }

    private function passwordMatch() {
        $result;
        if ($this->password !== $this->passwordConf) {
            $result = false;
        } else {
            $result = true ;
        }
        return $result;
    }

    private function usernameCheck() {
        $result;
        if (!$this->checkUser($this->username, $this->email)) {
            $result = false;
        } else {
            $result = true ;
        }
        return $result;
    }




}

