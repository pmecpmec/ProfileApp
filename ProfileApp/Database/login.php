


<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="style.css">
  <header class="header">

  </header>

  <title>KEEP</title>
  <b>
    <h1>Welkom bij onze website!</h1>
  </b>
</head>

<body>
  <br>
  <form action="/login" method="post">
    <div class="login">
      <h1> Login to start your journey</h1>
    
      <label for="email"><b> email</label></b>
      <input type="email" placeholder="Enter email" name="email"  id="email" required>

      <label for="password"><b> password</label></b>
      <input type="password" placeholder="Enter password" name="password"  id="password" required>

      <button type="submit" id="btn">log in</button>

      <p> not registered yet ? <button id="btn"><a href="/register">sign in</a></p> 
    </div>
  </form>
</body>
<footer>
</footer>

</html>	  




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
    $pdo = new PDO('mysql:host=localhost;dbname=profileapp', 'root', 'Realmadridnumber100!');

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


    if ($user && password_verify($password, $user['password'])) {
        // The username and password are correct
        echo 'Login successful';
        // Start a session and store user information
        session_start();
        $_SESSION['username'] = $username;
        // Redirect to home.php
        header('Location: home.php');
        exit;
    } else {
        // The username or password are incorrect
        echo 'Login failed';
    }

?>