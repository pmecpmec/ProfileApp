<?php
// We're starting a session
session_start();

// We're checking if the register form has been filled out
if(isset($_POST['register'])){
    // We're getting the values from the form
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];

    // We're checking if the password and the confirm password are the same
    if($pwd){
        // We're saving the values in the session so we can show them in the form again
        $_SESSION['username'] = $username;
        $_SESSION['pwd'] = $pwd;
       

        // We're saving an error message in the session
     
    }
    else{
        // We're getting the database connection
        include 'db.inc.php';

        // We're checking if the username is already in use
        $stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username');
        $stmt->execute(['username' => $username]);

        // If the username is already in use
        if($stmt->rowCount() > 0){
            // We're saving the values in the session so we can show them in the form again
            $_SESSION['username'] = $username;
            $_SESSION['pwd'] = $pwd;
       

            // We're saving an error message in the session
            $_SESSION['error'] = 'Username already taken';
        }
        else{
            // We're encrypting the password
            $pwd = password_hash($pwd, PASSWORD_DEFAULT);

            // We're adding the new user to the database
            $stmt = $pdo->prepare('INSERT INTO users (username, pwd) VALUES (:username, :pwd)');

            try {
                // We're trying to add the user
                $stmt->execute(['username' => $username, 'pwd' => $pwd]);

                // We're saving a success message in the session
                $_SESSION['success'] = 'User verified. You can <a href="../index.php">login</a> now';
            } catch (PDOException $e) {
                // If something went wrong, we're saving the error message in the session
                $_SESSION['error'] = $e->getMessage();
            }
        }
    }
}
else{
    // If the form wasn't filled out, we're saving an error message in the session
    $_SESSION['error'] = 'Fill up the registration form first';
}

// We're sending the user back to the index page
header('location: ../index.php');
?>
