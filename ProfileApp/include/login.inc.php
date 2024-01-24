<?php

// We need to use the database connection from this file
require_once 'db.inc.php';

// This function checks if a user's login details are correct
function loginUser($username, $pwd) {
    // We're using the database connection from the other file
    global $pdo;

    // We're asking the database for the user's username and password
    $stmt = $pdo->prepare("SELECT username, pwd FROM users WHERE username = ? ;");
    $stmt->execute([$username]);

    // If we found one user with that username
    if($stmt->rowCount() == 1){
        // We got the user's details
        $user = $stmt->fetch();
        // We're checking if the password they gave us is the same as the one in the database
        if (password_verify($pwd, $user['pwd'])) {
            // The password is right, so we return true
            return true;
        } else {
            // The password is wrong, so we return false
            return false;
        }
    } else {
        // We didn't find a user with that username, so we return false
        return false;
    }
}

?>
