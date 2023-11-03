<?php
require_once 'db.inc.php';

function loginUser($username, $pwd) {
    global $pdo;

    $stmt = $pdo->prepare("SELECT username, pwd FROM users WHERE username = ? AND pwd = ?;");
    $stmt->execute([$username, $pwd]);

    if($stmt->rowCount() == 1){
        // User found
        $user = $stmt->fetch();
        // Verify the password
        if (password_verify($pwd, $user['pwd'])) {
            // Password is correct
          
            return true;
        } else {
            // Password is incorrect
            return false;
        }
    } else {
        // No user found
        return false;
    }
}

?>
