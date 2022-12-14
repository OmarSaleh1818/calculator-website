<?php 

class Signup extends Database {

    protected function setUser($username, $password, $email) {
        $stmt = $this->connect()->prepare('INSERT INTO users 
        (username, password, email) VALUES (?, ?, ?);');

        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
        $stmt->execute(array($username,$hashedPwd, $email));

        session_start();
        $_SESSION['id'] = ['id'];
        $_SESSION['username'] = $_POST['username'];
        
        if($stmt == true){
            header("location: ../index.php?");
        }
    /* if (!$stmt->execute(array($username,$hashedPwd, $email))) {
          $stmt = null;
          header("location: ../index.php?error=stmtfailed");
          exit();
        }

         $stmt = null; */
    }

    protected function checkUser($username, $email) {
        $stmt = $this->connect()->prepare('SELECT username FROM users WHERE username = ? OR email = ?;');

        if (!$stmt->execute(array($username, $email))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $resultCheck;
        if ($stmt->rowCount() > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true ;
        }
        return $resultCheck;
    }
}


?>