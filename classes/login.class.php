<?php 

class Login extends Database {

    protected function getUser($username, $password) {
        $stamt = $this->connect()->prepare('SELECT password FROM users 
        WHERE username = ? OR email = ?;');

        if (!$stamt->execute(array($username,$password))) {
            $stamt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        if ($stamt->rowCount() == 0) {
            $stamt = null;
            header("location: ../index.php?error=usernotfound");
            exit();
        }

        $pwdHashed = $stamt->fetchAll(PDO::FETCH_ASSOC);
        $checkPassword = password_verify($password, $pwdHashed[0]["password"]);

        if ($checkPassword == false) {
            $stamt = null;
            header("location: ../index.php?error=wrongpassword");
            exit();
        } elseif ($checkPassword == true) {
            $stamt = $this->connect()->prepare('SELECT * FROM users 
            WHERE username = ? OR email = ? AND password = ?;');

        if (!$stamt->execute(array($username, $username, $password))) {
            $stamt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        if ($stamt->rowCount() == 0) {
            $stamt = null;
            header("location: ../index.php?error=usernotfound");
            exit();
        }

        $user = $stamt->fetchAll(PDO::FETCH_ASSOC);

        session_start();
        $_SESSION["id"] = $user[0]["id"];
        $_SESSION["username"] = $user[0]["username"];

        $stamt = null;
        }

}

}


?>