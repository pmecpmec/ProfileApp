<?php

if (isset($_POST['login'])) {
    // The login form has been submitted
    $username = $_POST['username'];
    $password = $_POST['password'];

} else {
    // The login form has not been submitted
    $username = "";
    $password = "";
}

require 'private.php';
    // Create a new PDO instance
    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');

    // Prepare the SQL statement
    $stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username');

    // Bind the username parameter to the SQL statement
    $stmt->bindParam(':username', $username);

    // Execute the SQL statement
    $stmt->execute();

    // Fetch the user from the database
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verify the password
    if ($user && password_verify($password, $user['password'])) {
        // The username and password are correct
        echo 'Login successful';
        //  Start a session and store user information
    } else {
        // The username or password are incorrect
        echo 'Login failed';
    }
}


?>