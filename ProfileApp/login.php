<?php
// Start a new session
session_start();

// Include the navigation bar
include 'navigation/nav.php';

// Display all PHP errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include the file 'login.inc.php' which contains functions for managing login
require_once "include/login.inc.php";

// Check if the form has been submitted
if($_SERVER["REQUEST_METHOD"]== "POST"){
    // Get the username and password from the form
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    // Check if the username or password is empty
    if(empty($username) or empty($pwd)){
        // If they are, show an error message and redirect to the index page
        $_SESSION['error'] = "Please fill in all fields!";
        header("Location: index.php");
        exit();
    }

    // Call the loginUser function
    $result = loginUser($username, $pwd);

    // If the login is successful
    if ($result) {
        // Set the session variables and redirect to the home page
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['pwd']= $pwd;
        header("location: home.php");
        exit();
    } else {
        // If the login failed, show an error message and redirect to the index page
        $_SESSION['error'] = "Invalid username or password.";
        header("Location: index.php");
        exit();
    }
}
?>


<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
   
    <title>Login </title>
</head>
<body>

<div class="container">
    
    <h1 class="text-center" style="margin-top:30px;">Login</h1>
</div>

<!-- Form voor inloggen -->
<div class="login-container">
    <form method="POST" action="login.php">
     <!-- Invoerveld voor de gebruikersnaam -->
     <div>
            <label for="username">Username</label>
            <input type="username" id="username" name="username" value="<?php echo (isset($_SESSION['username'])) ? $_SESSION['username'] : ''; unset($_SESSION['username']) ?>" placeholder="Input username" required>
        </div>
       <!-- Invoerveld voor de wachtwoord -->
       <div>
            <label for="pwd">Password</label>
            <input type="password" id="pwd" name="pwd" value="<?php echo (isset($_SESSION['password'])) ? $_SESSION['password'] : ''; unset($_SESSION['password']) ?>" placeholder="Input password" required>
        </div>
       
        <div>
            <button type="submit" name="login">Login</button>
            <!-- Link naar registration page -->
            <a href="index.php">Register</a>
        </div>
    </form>
</div>
</body>
</html>
