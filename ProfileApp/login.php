<?php

session_start();
include_once "login.inc.php";
?>


<!DOCTYPE html>
<html>
<head>
    <title>Inloggen</title>
</head>
<body>
    <form action="login.php"method="post">
    <label for="name">Name:</label>
        <input type="text" name="username" placeholder="username"><br>
        <label for="pwd">Wachtwoord:</label><br>
        <input type="password" id="pwd" name="pwd" required><br>
        <input type="submit" value="Inloggen">
        <a href="index.php">No account signup here</a>
        
   
   
    </form>
    <?php
    require_once 'include/db.inc.php';

if($_SERVER["REQUEST_METHOD"]== "POST"){
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
  
    if(empty($username)or empty($pwd)){
        die("Please fill in all fields!");
    }
  
    
    if($stmt->rowCount() == 1){
        // User found
        $user = $stmt->fetch();
        // Verify the password
        if (password_verify($pwd, $user['pwd'])) {
            // Password is correct, start a session and redirect to a secure page
         
            $_SESSION['loggedin'] = true;
           
            die();
        } else {
            // Password is incorrect, show an error message
            echo "Invalid username or password.";
        }
    } else {
        // No user found, show an error message
        echo "Invalid username   or password.";
    }

}


header("location:home.php");


    ?>
</body>
</html>